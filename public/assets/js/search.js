if (document.querySelector('div.header__search')) {
    const stringClear = document.querySelector('div.header__search-clean');
    stringClear.addEventListener('click', () => {
        document.querySelector('input.search').value = '';
    });
}
