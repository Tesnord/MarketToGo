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
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            } else {
                favArr.splice(item_index, 1)
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            }

            document.querySelectorAll('[data-role="favorite_counter"]').forEach(el => {
                el.innerText = favArr.length.toString()
            })

            if (favArr.length === 0) {
                Cookies.remove('market_favorites')
            } else {
                Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
            }

            console.log(favArr.length)
            console.log(favArr)
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
            e.target.querySelector('img').src = "/assets/images/svg/like2.svg"
        } else {
            favArr.splice(item_index, 1)
            e.target.querySelector('img').src = "/assets/images/svg/like.svg"
        }

        if (favArr.length === 0) {
            Cookies.remove('market_favorites')
        } else {
            Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
        }

        console.log(favArr)
    })
}

// Добавление в корзину из каталога
if (document.querySelectorAll('.catalog__item .catalog__item-buy')) {
    document.querySelectorAll('.catalog__item .catalog__item-buy').forEach(t => {
        t.addEventListener('click', e => {

            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let basketArr = []
            if (Cookies.get('market_basket')) {
                basketArr = JSON.parse(Cookies.get('market_basket')).basket
            }

            const found = basketArr.find((el) => {
                if (el.slug === product_id) {
                    el.quantity++
                    return true
                }
                return false
            })
            if (typeof found === 'undefined') {
                basketArr.push({'slug': product_id, 'quantity': 1})
            }

            if (basketArr.length === 0) {
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }
            console.log(basketArr)
        })
    })
}

// // Замена кнопки "купить" на блок количества товара
// if (document.querySelectorAll('.catalog__item .catalog__item-info')) {
//     // Увеличение количества товара в каталоге
//     document.querySelectorAll('.catalog__item .catalog__item-info .catalog__item-amount .up').forEach(t => {
//         t.addEventListener('click', e => {
//             e.preventDefault()
//             const product_id = e.target.closest('[data-product-id]').dataset.productId
//             let basketArr = []
//             if (Cookies.get('market_basket')) {
//                 basketArr = JSON.parse(Cookies.get('market_basket')).basket
//             }
//             basketArr.map(el => {
//                 if (el.id === product_id) {
//                     const input = e.target.parentElement.querySelector('input')
//                     if (input) {
//                         const max = input.max
//                         let value = input.value
//                         value = value++ < max ? value++ : max
//                         input.value = value
//                         el.quantity = value
//                     }
//                 }
//             })
//
//             if (basketArr.length === 0) {
//                 Cookies.remove('market_basket')
//             } else {
//                 Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
//             }
//             console.log(basketArr)
//
//         })
//     })
//     // Уменьшение количества товара в каталоге
//     document.querySelectorAll('.catalog__item .catalog__item-info .catalog__item-amount .down').forEach(t => {
//         t.addEventListener('click', e => {
//             const product_id = e.target.closest('[data-product-id]').dataset.productId
//             let basketArr = []
//             if (Cookies.get('market_basket')) {
//                 basketArr = JSON.parse(Cookies.get('market_basket')).basket
//             }
//             basketArr.map(el => {
//                 if (el.id === product_id) {
//                     const input = e.target.parentElement.querySelector('input')
//                     if (input) {
//                         let value = input.value
//                         value = value-- <= 1 ? 1 : value
//                         input.value = value
//                         el.quantity = value
//                     }
//                 }
//             })
//
//             if (basketArr.length === 0) {
//                 Cookies.remove('market_basket')
//             } else {
//                 Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
//             }
//             console.log(basketArr)
//
//         })
//     })
// }

// Добавление в корзину из карточки товара
if (document.querySelector(".button.button-primary[data-product-id]")) {
    document.querySelector(".button.button-primary[data-product-id]").addEventListener('click', e => {

        const product_id = e.currentTarget.dataset.productId
        let basketArr = []
        if (Cookies.get('market_basket')) {
            basketArr = JSON.parse(Cookies.get('market_basket')).basket
        }
        const found = basketArr.find((el) => {
            if (el.slug === product_id) {
                el.quantity++
                return true
            }
            return false
        })
        if (typeof found === 'undefined') {
            basketArr.push({'slug': product_id, 'quantity': '1'})
        }
        if (basketArr.length === 0) {
            Cookies.remove('market_basket')
        } else {
            Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
        }

        console.log(basketArr)
    })
}

// Изменение товара в корзине
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
                    basketArr.splice(basketArr.indexOf(el), 1)
                }
            })

            if (basketArr.length === 0) {
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }

            console.log(basketArr)

        })
    })
    // Увеличение количества товара в корзине
    document.querySelectorAll('.cart__list-item .catalog__item-amount .up').forEach(t => {
        t.addEventListener('click', e => {
            e.preventDefault()
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let basketArr = []
            if (Cookies.get('market_basket')) {
                basketArr = JSON.parse(Cookies.get('market_basket')).basket
            }
            basketArr.map(el => {
                if (el.id === product_id) {
                    const input = e.target.parentElement.querySelector('input')
                    if (input) {
                        const max = input.max
                        let value = input.value
                        value = value++ < max ? value++ : max
                        input.value = value
                        el.quantity = value
                    }
                }
            })

            if (basketArr.length === 0) {
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }
            console.log(basketArr)

        })
    })
    // Уменьшение количества товара в корзине
    document.querySelectorAll('.cart__list-item .catalog__item-amount .down').forEach(t => {
        t.addEventListener('click', e => {
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let basketArr = []
            if (Cookies.get('market_basket')) {
                basketArr = JSON.parse(Cookies.get('market_basket')).basket
            }
            basketArr.map(el => {
                if (el.id === product_id) {
                    const input = e.target.parentElement.querySelector('input')
                    if (input) {
                        let value = input.value
                        value = value-- <= 1 ? 1 : value
                        input.value = value
                        el.quantity = value
                    }
                }
            })

            if (basketArr.length === 0) {
                Cookies.remove('market_basket')
            } else {
                Cookies.set('market_basket', {"basket": basketArr}, {expires: 7})
            }
            console.log(basketArr)

        })
    })
}


/*
<div className="catalog__item-amount">
    <span className="catalog__item-buy" data-product-id="{{ $product->id }}">купить
        <img src="{{asset('/assets/images/svg/cart.svg')}}" alt="">
    </span>
</div>
<div className="catalog__item-amount">
    <input type="text" min="1" max="20" value="{{$product->quantityInBasket}}">
    <span className="up">
        <img src="{{asset('/assets/images/svg/plus.svg')}}" alt="">
    </span>
    <span className="down">
        <img src="{{asset('/assets/images/svg/minus.svg')}}" alt="">
    </span>
</div>*/
