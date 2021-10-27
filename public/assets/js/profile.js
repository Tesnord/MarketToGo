if (document.querySelector('div.lk__setting')) {
    document.querySelector('a.save').addEventListener('click', e => {
        let name = document.querySelector('.name').value
        let surname = document.querySelector('.surname').value
        let email = document.querySelector('.email').value
        let street = document.querySelector('.street').value
        let apartment = document.querySelector('.apartment').value
        let floor = document.querySelector('.floor').value
        let entrance = document.querySelector('.entrance').value
        let intercom = document.querySelector('.intercom').value
        fetch('/personal/setting', {
            method: 'PUT',
            body: JSON.stringify({
                name: name,
                surname: surname,
                email: email,
                address: {
                    street: street,
                    apartment: apartment,
                    floor: floor,
                    entrance: entrance,
                    intercom: intercom
                }
            }),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                'Content-type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(json => {
                if (json.status === 'ok') {
                    console.log('Status Ok')
                    location.reload()
                } else {
                    log('errors')
                }
            })
    })
}
