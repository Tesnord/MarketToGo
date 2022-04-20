let input = (id) => document.querySelector(id).value

if (document.querySelector('div.order__create')) {
    document.querySelector('a.button__create').addEventListener('click', e => {
        window.location.href = '/personal/setting';
        // document.querySelector('div.order__create').style.display = 'none';
        // document.querySelector('div.order__store').style.display = '';
    })
}
if (document.querySelector('div.order__store')) {
    document.querySelector('a.button__store').addEventListener('click', e => {
        // fetch('/', {
        //     method: '',
        //     body: JSON.stringify({
        //         street: input('#address1'),
        //         apartment: input('#address2'),
        //         floor: input('#address3'),
        //         entrance: input('#address4'),
        //         intercom: input('#address5')
        //     }),
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         'X-Requested-With': 'XMLHttpRequest',
        //         'Content-type': 'application/json'
        //     }
        // })
        //     .then(response => response.json())
        //     .then(json => {
        //     })
        // document.querySelector('div.order__store').style.display = 'none';
        // document.querySelector('div.order__show').style.display = '';
    })
}

if (document.querySelector('div.order__show')) {
    document.querySelector('a.button__show').addEventListener('click', e => {
        document.querySelector('div.order__show').style.display = 'none';
        document.querySelector('div.order__update').style.display = '';
    })
}
if (document.querySelector('div.order__update')) {
    document.querySelector('a.button__update').addEventListener('click', e => {
        document.querySelector('div.order__payment-list-change-tx').textContent = input('#updateAddress1')
        document.querySelector('div.order__show').style.display = '';
        document.querySelector('div.order__update').style.display = 'none';
    })
}

if (document.querySelector('div.order__list')) {
    document.querySelector('a.buy').addEventListener('click', e => {
        let arr = {
            payment: {
                type: 1
            },
            address: {
                street: input('#updateAddress1'),
                apartment: input('#updateAddress2'),
                floor: input('#updateAddress3'),
                entrance: input('#updateAddress4'),
                intercom: input('#updateAddress5')
            },
            profile: {
                phone: input('#tel'),
                email: input('#mail'),
                name: input('#name'),
                surname: input('#name-f'),
            }
        }
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
}

if (document.querySelector('.order__payment-list')) {
    document.querySelectorAll('.order__payment-list-item').forEach(a => {
        a.addEventListener('click', e => {
            e.preventDefault()
            e.currentTarget.querySelector('input').checked = true
            document.querySelector('#paymentResult').textContent = e.currentTarget.querySelector('.tit').textContent
        })
    })

    input('#payment2')
    input('#payment3')

}

