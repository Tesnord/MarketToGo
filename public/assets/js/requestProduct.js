if (document.querySelector('.card-product')) {
    const productId = document.querySelector('.card-product__inner').dataset.productId
    const ratingModal = document.querySelectorAll('.modal-reviews__rating-item input')
    const textModal = document.querySelector('.form__input-effect')
    const anonymityModal = document.querySelector('#check-modal')

    let reviewArray = {
        productId,
        rating: 0,
        text: '',
        isAnonymously: false
    }

    document.querySelector('.modal-reviews__bottom a').addEventListener('click', event => {
        ratingModal.forEach(elem => {
            if (elem.checked) {
                reviewArray.rating = elem.value
            }
        })
        if (textModal.value !== '') {
            reviewArray.text = textModal.value
        }
        if (anonymityModal.checked) {
            reviewArray.isAnonymously = true
        }
        myFetch('/review', 'POST', reviewArray)
            .then(response => response.json())
            .then(json => {
                if (json.status === 'ok') {
                    console.log(json)
                } else {
                    console.log(json)
                }
            })
    })
}
