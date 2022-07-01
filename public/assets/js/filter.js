let params = new URLSearchParams(location.search)

if (document.querySelector('.catalog__sorting-list')) {
    let sort = document.querySelector('li[data-sort]')
    sort.addEventListener('click', e => {
        switch (sort.getAttribute('data-sort')) {
            case 'price_asc':
                sort.setAttribute('data-sort', 'price_desc')
                break
            case 'price_desc':
                sort.setAttribute('data-sort', 'price_asc')
                break
            default:
                sort.setAttribute('data-sort', 'price_asc')
        }
        params.set('sort', e.currentTarget.dataset.sort)
        location.search = params.toString()
    })
}

if (document.querySelector('.catalog__top')) {
    let priceMin = document.querySelector('.polzunok-input-6-left')
    let priceMax = document.querySelector('.polzunok-input-6-right')
    let brands = document.querySelectorAll('.js_brand')
    let tags = document.querySelectorAll('.js_tag')
    let active = document.querySelector('.js_active')
    let promotion = document.querySelector('.js_promotion')

    document.querySelector('.filter__btn-b .button-primary').addEventListener('click', e => {

        params.set('price_min', priceMin.value)
        params.set('price_max', priceMax.value)
        brands.forEach(brand => {
            if (brand.checked && !params.has('brands[]')) {
                params.append('brands[]', brand.value)
            }
            if (brand.checked && [...params.values()].indexOf(brand.value) === -1) {
                params.append('brands[]', brand.value)
            }
        })
        tags.forEach(tag => {
            if (tag.checked && !params.has('tags[]')) {
                params.append('tags[]', tag.value)
            }
            if (tag.checked && [...params.values()].indexOf(tag.value) === -1) {
                params.append('tags[]', tag.value)
            }
        })

        if (active.checked) {
            params.set('in_stock', '1')
        }
        if (promotion.checked) {
            params.set('sales', '1')
        }
        location.search = params.toString()
    })

    document.querySelector('.filter__btn-b .button-tx').addEventListener('click', e => {
        location.href = location.href.split('?')[0]
    })
}
