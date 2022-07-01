if (document.querySelector('.lk')) {
    document.querySelector('.lk__setting__address--add button').addEventListener('click', () => {
        let token = ''
        document.querySelectorAll('meta').forEach(elem => {
            if (elem.getAttribute('name') === "csrf-token") token = elem.getAttribute('content')
        })
        let countAddressinput = document.querySelectorAll('.address')
        document.querySelector('.lk__setting__address--add')
            .insertAdjacentHTML(
                "beforebegin",
                `<form method="POST" action="/personal/setting" class="order__wrap address" id="address-${countAddressinput.length+1}">` +
            '<input type="hidden" name="_method" value="PUT">' +
            `<input type="hidden" name="_token" value="${token}">` +
            '<div class="order__delivery">' +
            '<div class="order__wrap-top"><div class="order__wrap-title">Адрес доставки</div></div>' +
            '<div class="order__input"><div class="row"><div class="col-lg-12"><div class="order__input-cell">' +
            `<input class="form__input-effect street" name="street" type="text" id="address-street-${countAddressinput.length+1}">` +
            `<label for="address-street-${countAddressinput.length+1}">Адрес</label>` +
            '</div></div><div class="col-lg-3 col-md-6"><div class="order__input-cell">' +
            `<input class="form__input-effect apartment" name="apartment" type="number" id="address-apartment-${countAddressinput.length+1}">` +
            `<label for="address-apartment-${countAddressinput.length+1}">Квартира</label>` +
            '</div></div><div class="col-lg-3 col-md-6"><div class="order__input-cell">' +
            `<input class="form__input-effect floor" name="floor" type="number" id="address-floor-${countAddressinput.length+1}">` +
            `<label for="address-floor-${countAddressinput.length+1}">Этаж</label>` +
            '</div></div><div class="col-lg-3 col-md-6"><div class="order__input-cell">' +
            `<input class="form__input-effect entrance" name="entrance" type="number" id="address-entrance-${countAddressinput.length+1}">` +
            `<label for="address-entrance-${countAddressinput.length+1}">Подъезд</label>` +
            '</div></div><div class="col-lg-3 col-md-6"><div class="order__input-cell">' +
            `<input class="form__input-effect intercom" name="intercom" type="text" id="address-intercom-${countAddressinput.length+1}">` +
            `<label for="address-intercom-${countAddressinput.length+1}">Домофон</label>` +
            '</div></div></div></div><div class="button-group__back">' +
            '<button type="submit" class="button button-secondary">Сохранить</button>' +
            '<button type="reset" class="button button-tx clear">удалить</button></div></div></form>')
        document.querySelectorAll('.clear').forEach(elem => {
            elem.addEventListener('click', event => {
                if (elem.closest('.address') && elem.closest('.address').id !== 'address-1') {
                    elem.closest('.address').remove()
                }
            })
        })
    })
}

