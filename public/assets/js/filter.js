/*if (document.querySelector('div.catalog__sorting')) {
    document.querySelector('#priceAsc').addEventListener('click', e => {
        const sortType = 'asc'
        fetch('/catalog', {
            method: 'GET',
            body: JSON.stringify(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                'Content-type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(json => {
                if (json.status === 'ok') {
                    log('ok')
                } else {
                    log('errors')
                }
            })
    })
}*/
