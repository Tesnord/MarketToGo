'use strict'
/**
 * Шаблон fetch запроса
 */
const myFetch = (url, method, data) => fetch(url, {
    method,
    body: JSON.stringify(data),
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'X-Requested-With': 'XMLHttpRequest',
        'Content-type': 'application/json'
    }
})
/**
 * Шаблоны для Favorite
 */
const getFavorites = () => {
    if (Cookies.get('market_favorites')) {
        return JSON.parse(Cookies.get('market_favorites')).favorites
    }
    return []
}
const setFavorites = favArray => {
    if (favArray.length === 0) {
        Cookies.remove('market_favorites')
        document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.add('d-none'));
    } else {
        Cookies.set('market_favorites', {"favorites": favArray}, {expires: 7})
        document.querySelectorAll('span.favoriteCount').forEach(el => el.innerHTML = favArray.length.toString());
        document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.remove('d-none'));
    }
}
/**
 * Добавление в избранное из каталога
 */
if (document.querySelectorAll('.catalog__item .catalog__item-fav')) {
    document.querySelectorAll('.catalog__item .catalog__item-fav').forEach(t => {
        t.addEventListener('click', e => {
            const productSelect = e.currentTarget.closest('[data-product-id]')
            const product_id = productSelect.dataset.productId
            const favoriteArr = getFavorites()
            const item_index = favoriteArr.indexOf(product_id)
            if (item_index === -1) {
                myFetch('/favorite', 'PUT', {product_id})
                    .then(response => response.json())
                    .then(json => {
                        if (json.status === 'ok') {
                            favoriteArr.push(product_id)
                            setFavorites(favoriteArr)
                        } else {
                            log('errors')
                        }
                    })

            } else {
                myFetch('/favorite', 'DELETE', {product_id})
                    .then(response => response.json())
                    .then(json => {
                        if (json.status === 'ok') {
                            favoriteArr.splice(item_index, 1)
                            setFavorites(favoriteArr)
                        } else {
                            log('errors')
                        }
                    })
            }
        })
    })
}
/**
 * Добавление в избранное из карточки товара
 */
if (document.querySelector(".card-product__inner")) {
    document.querySelector(".button.button-all").addEventListener('click', e => {
        const productSelect = e.currentTarget.closest('[data-product-id]')
        const product_id = productSelect.dataset.productId
        const favoriteArr = getFavorites()
        let item_index = favoriteArr.indexOf(product_id)
        if (item_index === -1) {
            myFetch('/favorite', 'PUT', {product_id})
                .then(response => response.json())
                .then(json => {
                    if (json.status === 'ok') {
                        favoriteArr.unshift(product_id)
                        productSelect.querySelector('img.like').src = "/assets/images/svg/like2.svg"
                        setFavorites(favoriteArr)
                    } else {
                        log('errors')
                    }
                })

        } else {
            myFetch('/favorite', 'DELETE', {product_id})
                .then(response => response.json())
                .then(json => {
                    if (json.status === 'ok') {
                        favoriteArr.splice(item_index, 1)
                        productSelect.querySelector('img.like').src = "/assets/images/svg/like.svg"
                        setFavorites(favoriteArr)
                    } else {
                        log('errors')
                    }
                })
        }
    })
}


/**
 * Шаблоны для Basket
 */
const getBasket = () => {
    if (Cookies.get('market_basket')) {
        return JSON.parse(Cookies.get('market_basket')).basket
    }
    return []
}

const setBasket = basketArray => {
    if (basketArray.length === 0) {
        Cookies.remove('market_basket')
        document.querySelector('span.basketCount').classList.add('d-none');
    } else {
        Cookies.set('market_basket', {"basket": basketArray}, {expires: 7})
        document.querySelector('span.basketCount').innerHTML = basketArray.length.toString();
        document.querySelector('span.basketCount').classList.remove('d-none');
    }
}
const putEvent = el => {
    el.addEventListener('click', e => {
        const basketArr = getBasket()
        const product = e.target.closest('[data-product-id]')
        const input = product.querySelector('input.count')
        const product_id = product.dataset.productId
        myFetch('/basket', 'PUT', {id: product_id, count: 1})
            .then(response => response.json())
            .then(json => {
                if (json.status === 'ok') {
                    const found = basketArr.find((el) => {
                        if (el.id === product_id) {
                            el.count++
                            input.value = el.count;
                            return true
                        }
                        return false
                    })
                    if (typeof found === 'undefined') {
                        basketArr.push({'id': product_id, 'count': 1})
                        input.value = '1';

                    }
                    product.querySelector('#buy').style.display = 'none'
                    product.querySelector('#count').style.display = ''
                    setBasket(basketArr)
                } else {
                    log('errors')
                }
            })
    })
}
/**
 * Изменение товара
 * Увеличение количества товара
 */
const up = e => {
    const basketArr = getBasket()
    const product = e.currentTarget.closest('[data-product-id]')
    const product_id = product.dataset.productId
    const input = product.querySelector('input.count')
    basketArr.forEach(el => {
        if (el.id === product_id) {
            myFetch('/basket', 'PUT', {id: product_id, count: input.value})
                .then(response => response.json())
                .then(json => {
                    if (json.status === 'ok') {
                        input.value = input.value++ < input.max ? input.value++ : input.max
                        el.count = input.value
                        log(basketArr)
                        setBasket(basketArr)
                    } else {
                        log('errors')
                    }
                })
        }
    })
}
/**
 * Уменьшение количества товара
 * удаление товара если 0
 */
const down = e => {
    const basketArr = getBasket()
    const product = e.currentTarget.closest('[data-product-id]')
    const product_id = product.dataset.productId
    const input = product.querySelector('input.count')
    basketArr.forEach((el, key) => {
        if (el.id === product_id) {
            myFetch('/basket', 'PUT', {id: product_id, count: input.value})
                .then(response => response.json())
                .then(json => {
                    if (json.status === 'ok') {
                        if (--input.value === 0) {
                            basketArr.splice(key, 1)
                            product.querySelector('#buy').style.display = ''
                            product.querySelector('#count').style.display = 'none'
                        } else {
                            el.count = input.value
                        }
                        log(basketArr)
                        setBasket(basketArr)
                    } else {
                        log('errors')
                    }
                })
        }
    })
}

/**
 * Добавление в корзину из каталога
 */
if (document.querySelectorAll('div.catalog__item-info')) {
    document.querySelectorAll('div.catalog__item-info span.catalog__item-buy').forEach(t => {
        putEvent(t)
    })
}

/**
 * Добавление в корзину из карточки товара
 */
if (document.querySelector("div.card-product__inner")) {
    putEvent(document.querySelector("a.button-primary"))
}

/**
 * Изменение товара в корзине
 */
if (document.querySelectorAll('.cart__list-item')) {
    /**
     * Увеличение количества товара
     */
    document.querySelectorAll('.cart__list-item span.up').forEach(t => {
        t.addEventListener('click', e => {
            const product = e.currentTarget.closest('[data-product-id]')
            const input = product.querySelector('input.count')
            input.value = input.value++ < input.max ? input.value : input.max
            const event = new Event('change', { bubbles: true });
            input.dispatchEvent(event);
        })
    })
    /**
     * Уменьшение количества товара
     * удаление товара если 0
     */
    document.querySelectorAll('.cart__list-item span.down').forEach(t => {
        t.addEventListener('click', e => {
            const product = e.currentTarget.closest('[data-product-id]')
            const input = product.querySelector('input.count')
            input.value = input.value-- > 0 ? input.value : 0
            const event = new Event('change', { bubbles: true });
            input.dispatchEvent(event);
        })
    })

    document.querySelectorAll('.cart__list-item input.count').forEach(t => {
        t.addEventListener('change', _.debounce(e => {
            const basketArr = getBasket()
            const product = e.target.closest('[data-product-id]')
            const product_id = product.dataset.productId
            const input = product.querySelector('input.count')
            const products = document.querySelectorAll('.cart__list-item').length
            /**
             * Изменение суммы в корзине
             */
            const onePriceNow = product.querySelector('.one__price-now').textContent
            let price = onePriceNow * input.value
            product.querySelector('.price-now').innerHTML = price.toFixed(1)
            let arrPrice = []
            document.querySelectorAll('.price-now').forEach(function (item) {
                arrPrice.push(Number(item.innerText))
            })
            let outPrice = 0
            for (let i = 0; i < arrPrice.length; i++) {
                outPrice += arrPrice[i]
            }
            document.querySelector('.total__price-now').innerHTML = outPrice
            /**
             * Изменение экономии в корзине
             */
            if (product.querySelector('.one__price-old')) {
                const onePriceOld = product.querySelector('.one__price-old').textContent
                let econom = (onePriceOld * input.value) - (onePriceNow * input.value)
                product.querySelector('.economy').innerHTML = econom.toFixed(1)
                let arrEconomy = []
                document.querySelectorAll('.economy').forEach(function (item) {
                    arrEconomy.push(Number(item.innerText))
                })
                let outEconomy = 0
                for (let i = 0; i < arrEconomy.length; i++) {
                    outEconomy += arrEconomy[i]
                }
                let total = outPrice + outEconomy
                document.querySelector('.total__price-old').innerHTML = total.toFixed(1)
            }

            const el = basketArr.find(el => el.id === product_id)
            if (+input.value === 0) {
                myFetch('/basket', 'DELETE', {id: product_id})
                    .then(response => response.json())
                    .then(json => {
                        if (json.status === 'ok') {
                            setBasket(basketArr.filter(el => el.id !== product_id))
                            product.remove()
                            if (getBasket().length === 0) {
                                location.reload()
                            }
                        } else {
                            log('errors')
                        }
                    })
            } else {
                myFetch('/basket', 'PUT', {id: product_id, count: input.value})
                    .then(response => response.json())
                    .then(json => {
                        if (json.status === 'ok') {
                            el.count = input.value
                            log(basketArr)
                            setBasket(basketArr)
                        } else {
                            input.value = input.value--
                            log('errors')
                        }
                    })
            }
        }, 1000))
    })
    /**
     * Удаление товара из корзины
     */
    document.querySelectorAll('.cart__list-item .cart__list-delete').forEach(t => {
        t.addEventListener('click', e => {
            const basketArr = getBasket()
            const product = e.currentTarget.closest('[data-product-id]')
            const product_id = product.dataset.productId
            getBasket().forEach((el, key) => {
                if (el.id === product_id) {
                    myFetch('/basket', 'DELETE', {id: product_id})
                        .then(response => response.json())
                        .then(json => {
                            if (json.status === 'ok') {
                                basketArr.splice(key, 1)
                                product.remove()
                                setBasket(basketArr)
                                if (basketArr.length === 0) {
                                    location.reload()
                                }
                                log(basketArr)
                            } else {
                                log('errors')
                            }
                        })
                }
            })
        })
    })
}

