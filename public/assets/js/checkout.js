if (document.querySelector('.order__delivery')) {
    /**
     * Работа с существующими адресами.
     */

    /** Редактировать адрес */
    if (document.querySelector('.address__js--wrapper')) {

        /** Переключение блока */
        document.querySelectorAll('.address__js--wrapper').forEach(elem => {
            elem.querySelector('.address__checked').addEventListener('click', event => {
                elem.querySelector('.address__js').style = 'display: none'
                elem.querySelector('.order__input').style = 'display: block'
            })
            elem.querySelector('.button__cancel').addEventListener('click', event => {
                event.preventDefault()
                // document.querySelectorAll('.order__input input').forEach(elem => {
                //     elem.value = ''
                // })
                elem.querySelector('.address__js').style = 'display: block'
                elem.querySelector('.order__input').style = 'display: none'
            })

            /** Выбранный адрес */
            // let array = {}
            // if(elem.querySelector('.address__js input').checked) {
            //     let id = elem.querySelector('.address__js input').id
            //     let street = document.querySelector(`#address-street-${id}`).value
            //     let apartment = document.querySelector(`#address-apartment-${id}`).value
            //     let floor = document.querySelector(`#address-floor-${id}`).value
            //     let entrance = document.querySelector(`#address-entrance-${id}`).value
            //     let intercom = document.querySelector(`#address-intercom-${id}`).value
            //     array = {
            //         street,
            //         apartment,
            //         floor,
            //         entrance,
            //         intercom
            //     }
            //     elem.querySelector('.address__js').addEventListener('click', event => {
            //         array = {
            //             street,
            //             apartment,
            //             floor,
            //             entrance,
            //             intercom
            //         }
            //     })
            // }

            // elem.querySelector('.button__update').addEventListener('click', event => {
            //     event.preventDefault()
            //
            //     // console.log(JSON.stringify(array))
            //     fetch('/personal/setting', {
            //         method: 'POST',
            //         body: JSON.stringify(array),
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            //             'X-Requested-With': 'XMLHttpRequest',
            //             'Content-type': 'application/json'
            //         }
            //     })
            //         .then(response => response.json())
            //         .then(json => {
            //             console.log(json)
            //         })
            // })
        })


    }

    /**
     * Работа с пустым адресом.
     */
    /*if (document.querySelector('.lk__setting__address--add') && document.querySelector('.new-address')) {
        let street = document.querySelector('#address-street')
        let apartment = document.querySelector('#address-apartment')
        let floor = document.querySelector('#address-floor')
        let entrance = document.querySelector('#address-entrance')
        let intercom = document.querySelector('#address-intercom')

        document.querySelector('.lk__setting__address--add button').addEventListener('click', event => {
            event.preventDefault()
            document.querySelector('.order__input').style = 'display: block'
            document.querySelector('.lk__setting__address--add').style = 'display: none'
        })
        if (document.querySelector('.button__cancel')) {
            document.querySelector('.button__cancel').addEventListener('click', event => {
                event.preventDefault()
                document.querySelectorAll('.order__input input').forEach(elem => {
                    elem.value = ''
                })
                document.querySelector('.order__input').style = 'display: none'
                document.querySelector('.lk__setting__address--add').style = 'display: block'
            })
        }
        if (document.querySelector('.button__create')) {
            document.querySelector('.button__create').addEventListener('click', event => {
                event.preventDefault()

                let arr = {
                    street: street.value,
                    apartment: apartment.value,
                    floor: floor.value,
                    entrance: entrance.value,
                    intercom: intercom.value
                }
                console.log(arr)
                fetch('/personal/setting', {
                    method: 'POST',
                    body: JSON.stringify({
                        street: street.value,
                        apartment: apartment.value,
                        floor: floor.value,
                        entrance: entrance.value,
                        intercom: intercom.value
                    }),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-type': 'application/json'
                    }
                })
                    .then(response => response.json())
                    .then(json => {
                        console.log(json)
                    })
                document.querySelector('div.order__store').style.display = 'none';
                document.querySelector('div.order__show').style.display = '';
            })
        }
    }*/



}

if (document.querySelector('div.order__list')) {
    document.querySelector('a.buy').addEventListener('click', e => {
        // Доставка
        let address = {
            // id: '',
            // date: false
            street: document.querySelector('.street').value,
            apartment: document.querySelector('.apartment').value,
            floor: document.querySelector('.floor').value,
            entrance: document.querySelector('.entrance').value,
            intercom: document.querySelector('.intercom').value,
        }
        // document.querySelectorAll('.address__js input').forEach(elem => {
        //     if (elem.checked) {
        //         address.id = elem.id
        //
        //     }
        // })
        // Время доставки
        // if (document.querySelector('#pills-time-2').classList.contains('show')) {
        //     address.date = document.querySelector('#select-1 .select__toggle').textContent
        //     address.time = document.querySelector('#select-2 .select__toggle').textContent
        // }

        // Оплата
        let payment = {
            type: '',
            // value: false,
            // score: false
        }
        // Тип оплаты
        document.querySelector('#payment').querySelectorAll('input').forEach(elem => {
            if (elem.checked) {
                payment.type = elem.id
                // if (elem.id === 'payment2') {
                //     payment.value = document.querySelector('.payment__cash--input').value
                // }
            }
        })
        // Списать баллы
        /*if (document.querySelector('.scores__checked').checked) {
            payment.score = document.querySelector('.scores__js').value
        }*/

        // Профиль
        let profile = {
            phone: document.querySelector('#tel').value,
            email: document.querySelector('#mail').value,
            name: document.querySelector('#name').value,
            surname: document.querySelector('#name-f').value,
        }

        let arr = {
            payment,
            address,
            profile
        }
        // console.log(arr)
        myFetch('/basket/checkout', 'PUT', arr)
            .then(response => response.json())
            .then(json => {
                if (json.status === 'ok') {
                    location.search = `?numberId=${json.result.numberId}&date=${json.result.date}`
                    Cookies.remove('market_basket')
                } else {
                    log('errors')
                }
            })
    })

    document.querySelector('.cart__list-promo button').addEventListener('click', event => {
        let arr = {
            promocode: document.querySelector('.cart__list-promo input').value
        }
        myFetch('/basket/checkout/promocode', 'PUT', arr)
            .then(response => response.json())
            .then(json => {
                console.log(json)
                if (json.result.meta.code === 400) {
                    document.querySelector('.order__list-promo').insertAdjacentHTML(
                        "beforeend",
                        '<div class="cart__list-promo-done">Промокод применен</div>')
                    document.querySelector('.totalPrice').insertAdjacentHTML(
                        "beforebegin",
                    '<div class="order__list-all prom">' +
                        '<div class="order__list-all-item">Промокод:</div>' +
                        '<div class="order__list-all-item">-120 ₽</div>' +
                        '</div>')
                } else {
                    log('errors')
                }
            })
    }, { once: true })
}

if (document.querySelector('.order__payment-list')) {
    document.querySelectorAll('.payment--js').forEach(a => {
        a.addEventListener('click', e => {
            e.preventDefault()
            e.currentTarget.querySelector('input').checked = true
            document.querySelector('#paymentResult').textContent = e.currentTarget.querySelector('.tit').textContent
        })
    })
}
if (document.querySelector('.payment__tab--js')) {
    document.querySelectorAll('.payment__cash--btn').forEach(elem => {
        elem.addEventListener('click', event => {
            document.querySelectorAll('.payment__cash--btn').forEach(e => {
                e.classList.remove('payment__cash--btn--active')
            })
            elem.classList.add('payment__cash--btn--active')
            if (Number(elem.textContent)) {
                document.querySelector('.payment__cash--input').value = elem.textContent
            } else {
                document.querySelector('.payment__cash--input').value = ''
            }
        })
    })
}
if (document.querySelector('.payment__variables--js')) {
    document.querySelectorAll('.payment--js').forEach(elem => {
        elem.addEventListener('click', () => {
            elem.children[0].checked = true
        })
    })
}

if (document.querySelector('.order__delivery__time')) {
    document.querySelectorAll('.delivery__time--js').forEach(elem => {
        elem.addEventListener('click', () => {
            elem.children[0].checked = true
        })
    })
}
