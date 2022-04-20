document.querySelectorAll('li[data-sort]').forEach(el => {
    el.addEventListener('click', e => {
        Cookies.set('catalog_sort', e.currentTarget.dataset.sort, {expires: 1})
        location.reload()
    })
})
if (document.querySelector('.filter-bl')) {
    let priceMin = document.querySelector('.polzunok-input-6-left')
    let priceMax = document.querySelector('.polzunok-input-6-right')
    let brands = document.querySelectorAll('.js_brand')
    let tags = document.querySelectorAll('.js_tag')
    let active = document.querySelector('.js_active')
    let promotion = document.querySelector('.js_promotion')
    document.querySelector('.filter__btn-b .button-primary').addEventListener('click', e => {
        let params = new URLSearchParams()
        params.set('price_min', priceMin.value)
        params.set('price_max', priceMax.value)
        brands.forEach(brand => {
            if (brand.checked) {
                params.append('brands[]', brand.value)
            }
        })
        tags.forEach(tag => {
            if (tag.checked) {
                params.append('tags[]', tag.value)
            }
        })

        if (active.checked) {
            params.set('in_stock', '1')
        }
        if (promotion.checked) {
            console.log(promotion.value)
            params.set('sales', '1')
        }
        location.search = params.toString()
    })
    let url = new URLSearchParams(location.search.slice(1))
    let urlPriceMin = url.get('price_min')
    let urlPriceMax = url.get('price_max')
    let urlBrand = url.getAll('brands')
    let urlTag = url.getAll('tags')
    let urlActive = url.get('in_stock')
    let urlPromotion = url.get('sales')
    if (urlPriceMin) priceMin.value = urlPriceMin
    if (urlPriceMax) priceMax.value = urlPriceMax
    if (urlBrand) {
        brands.forEach(e => {
            if (urlBrand.includes(e.value)) e.checked = true
        })
    }
    if (urlTag) {
        tags.forEach(e => {
            if (urlTag.includes(e.value)) e.checked = true
        })
    }
    if (urlActive) active.checked = true
    if (urlPromotion) promotion.checked = true

    document.querySelector('.filter__btn-b .button-tx').addEventListener('click', e => {
        location.href = location.href.split('?')[0]
    })
}
