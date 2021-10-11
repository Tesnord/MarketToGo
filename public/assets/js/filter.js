document.querySelectorAll('li[data-sort]').forEach(el => {
    el.addEventListener('click', e => {
        Cookies.set('catalog_sort', e.currentTarget.dataset.sort, {expires: 1})
        location.reload()
    })
})
