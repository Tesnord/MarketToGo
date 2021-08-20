'use strict'
// Добавление в избранное из каталога
if (document.querySelectorAll('.catalog__item .catalog__item-fav')) {
    document.querySelectorAll('.catalog__item .catalog__item-fav').forEach(t => {
        t.addEventListener('click', e => {
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let favArr = []
            if (Cookies.get('market_favorites')) {
                favArr = JSON.parse(Cookies.get('market_favorites')).favorites
            }
            const item_index = favArr.indexOf(product_id)
            if (item_index === -1) {
                favArr.unshift(product_id)
                fetch('/favorite', {
                    method: 'PUT',
                    body: JSON.stringify({product_id}),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-type': 'application/json'
                    }
                })
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            } else {
                favArr.splice(item_index, 1)
                fetch('/favorite', {
                    method: 'DELETE',
                    body: JSON.stringify({product_id}),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-type': 'application/json'
                    }
                })
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            }
            document.querySelectorAll('[data-role="favorite_counter"]').forEach(el => {
                el.innerText = favArr.length.toString()
            })
            if (favArr.length === 0) {
                Cookies.remove('market_favorites')
                document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.add('d-none'));
            } else {
                Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
                document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.remove('d-none'));
            }
            document.querySelectorAll('span.favoriteCount').forEach(el => el.innerHTML = favArr.length);
            log(favArr)
        })
    })
}
// Добавление в избранное из карточки товара
if (document.querySelector(".button.button-all[data-product-id]")) {
    document.querySelector(".button.button-all[data-product-id]").addEventListener('click', e => {
        const product_id = e.currentTarget.dataset.productId
        let favArr = []
        if (Cookies.get('market_favorites')) {
            favArr = JSON.parse(Cookies.get('market_favorites')).favorites
        }
        const item_index = favArr.indexOf(product_id)
        if (item_index === -1) {
            favArr.unshift(product_id)
            fetch('/favorite', {
                method: 'PUT',
                body: JSON.stringify({product_id}),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-type': 'application/json'
                }
            })
            e.target.querySelector('img').src = "/assets/images/svg/like2.svg"
        } else {
            favArr.splice(item_index, 1)
            fetch('/favorite', {
                method: 'DELETE',
                body: JSON.stringify({product_id}),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-type': 'application/json'
                }
            })
            e.target.querySelector('img').src = "/assets/images/svg/like.svg"
        }
        if (favArr.length === 0) {
            Cookies.remove('market_favorites')
            document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.add('d-none'));
        } else {
            Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
            document.querySelectorAll('span.favoriteCount').forEach(el => el.classList.remove('d-none'));
        }
        document.querySelectorAll('span.favoriteCount').forEach(el => el.innerHTML = favArr.length);
        log(favArr)
    })
}
// Добавление в корзину из каталога
if (document.querySelectorAll('div.catalog__item-info')) {
    document.querySelectorAll('div.catalog__item-info a.catalog__item-buy').forEach(t => {
        t.addEventListener('click', e => {
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let basketArr = []
            if (Cookies.get('market_basket')) {
                basketArr = JSON.parse(Cookies.get('market_basket')).basket
            }
            const found = basketArr.find((el) => {
                if (el.id === product_id) {
                    el.quantity++
                    e.target.parentElement.querySelector('input').value = el.quantity;
                    return true
                }
                return false
            })
            if (typeof found === 'undefined') {
                basketArr.push({'id': product_id, 'quantity': 1})
                e.target.parentElement.querySelector('input').value = '1';
            }
            Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            e.target.style.display = 'none'
            e.target.parentElement.querySelector('div.catalog__item-amount').style.display = ''

            log(basketArr)
        })
    })
}
// Добавление в корзину из карточки товара
if (document.querySelector(".button.button-primary[data-product-id]")) {
    document.querySelector(".button.button-primary[data-product-id]").addEventListener('click', e => {
        const product_id = e.target.closest('[data-product-id]').dataset.productId
        let basketArr = []
        if (Cookies.get('market_basket')) {
            basketArr = JSON.parse(Cookies.get('market_basket')).basket
        }
        const found = basketArr.find((el) => {
            if (el.id === product_id) {
                el.quantity++
                e.target.parentElement.querySelector('input').value = el.quantity;
                return true
            }
            return false
        })
        if (typeof found === 'undefined') {
            basketArr.push({'id': product_id, 'quantity': 1})
            e.target.parentElement.querySelector('input').value = '1';
        }
        Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
        e.target.style.display = 'none'
        e.target.parentElement.querySelector('div.catalog__item-amount').style.display = ''

        log(basketArr)
    })
}

// Изменение товара
// Увеличение количества товара
const up = (e) => {
    const id = e.currentTarget.closest('[data-product-id]').dataset.productId
    let basketArr = []
    if (Cookies.get('market_basket')) {
        basketArr = JSON.parse(Cookies.get('market_basket')).basket
    }
    basketArr.forEach(el => {
        if (el.id === id) {
            const input = document.querySelector(`[data-product-id="${id}"] input.count`)
            input.value = input.value++ < input.max ? input.value++ : input.max
            el.quantity = input.value
            Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
        }
    })
}
// Уменьшение количества товара (+ удаление товара если 0)
const down = (e) => {
    const id = e.currentTarget.closest('[data-product-id]').dataset.productId
    let basketArr = []
    if (Cookies.get('market_basket')) {
        basketArr = JSON.parse(Cookies.get('market_basket')).basket
    }
    basketArr.forEach((el, key) => {
        if (el.id === id) {
            const input = document.querySelector(`[data-product-id="${id}"] input.count`)
            if (--input.value === 0) {
                basketArr.splice(key, 1)
                input.closest('div.catalog__item-amount').style.display = 'none'
                input.closest('div.catalog__item-amount').nextElementSibling.style.display = ''
            } else {
                el.quantity = input.value
            }

            if (basketArr.length === 0) {
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }
        }
    })
}
// Удаление товара в корзине
if (document.querySelectorAll('.cart__list-item')) {
    // Удаление товара из корзины
    document.querySelectorAll('.cart__list-item .cart__list-delete').forEach(t => {
        t.addEventListener('click', e => {
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let basketArr = []
            if (Cookies.get('market_basket')) {
                basketArr = JSON.parse(Cookies.get('market_basket')).basket
            }
            basketArr.map(el => {
                if (el.id === product_id) {
                    basketArr = basketArr.splice(basketArr.indexOf(el), 1)
                }
            })

            if (basketArr.length === 0) {product_id = e.target.closest('[data-product-id]').dataset.productId
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }

            log(basketArr)

        })
    })
}
