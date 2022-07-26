if (document.querySelector('.card-product')) {
    const productId = document.querySelector('.card-product__inner').dataset.productId
    const ratingModal = document.querySelectorAll('.modal-reviews__rating-item input')
    const textModal = document.querySelector('.form__input-effect')
    const fileModal = document.querySelector('.custom-file-upload input')
    const anonymityModal = document.querySelector('#check-modal')
    // console.log(fileModal.files)


    function JsonToFormData(json) {
        const form = new FormData()
        parseObject(form, json)
        return form
    }

    function parseObject(form, object, parentKey) {
        for (const key in object) {
            const value = object[key]
            const keyPath = parentKey ? `${parentKey}[${key}]` : key

            if (value instanceof FileList) {
                for (const file of value) {
                    form.append(`${keyPath}[]`, file)
                }
                continue
            }
            if (typeof value === "object" && !(value instanceof File)) {
                parseObject(form, value, keyPath)
            } else {
                form.append(keyPath, value)
            }
        }
    }


    document.querySelector('.modal-reviews__bottom a').addEventListener('click', event => {
        let reviewArray = {
            productId,
            rating: 0,
            text: textModal.value,
            file: fileModal.files,
            isAnonymously: anonymityModal.checked
        }

        ratingModal.forEach(elem => {
            if (elem.checked) {
                reviewArray.rating = elem.value
            }
        })
        console.log(reviewArray)
        fetch('/review', {
            method: 'POST',
            body: JsonToFormData(reviewArray),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                // 'Content-type': 'application/json'
            }
        })
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
