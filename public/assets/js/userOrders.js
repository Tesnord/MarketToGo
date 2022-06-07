if (document.querySelector('.order__button--wrapper')) {
    let activeBtn = document.querySelector('.js__button-active')
    let storyBtn = document.querySelector('.js__button-story')
    let activeOrders = document.querySelector('.orders-new')
    let storyOrders = document.querySelector('.orders-story')
    activeBtn.addEventListener('click', event => {
        console.log(`story ${!activeBtn.classList.contains('order__button--active')}`)
        if (!activeBtn.classList.contains('order__button--active')) {
            activeBtn.classList.add('order__button--active')
            storyBtn.classList.remove('order__button--active')

            activeOrders.classList.add('active')
            activeOrders.classList.add('show')

            storyOrders.classList.remove('active')
            storyOrders.classList.remove('show')
        }
    })

    storyBtn.addEventListener('click', event => {
        console.log(`story ${!storyBtn.classList.contains('order__button--active')}`)
        if (!storyBtn.classList.contains('order__button--active')) {
            storyBtn.classList.add('order__button--active')
            activeBtn.classList.remove('order__button--active')

            storyOrders.classList.add('active')
            storyOrders.classList.add('show')

            activeOrders.classList.remove('active')
            activeOrders.classList.remove('show')
        }
    })
}
