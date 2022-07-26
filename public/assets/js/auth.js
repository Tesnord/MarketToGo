// Авторизация
if (document.querySelector("div.registration")) {
    $("#tel").mask("+7(999) 999-9999");
    $("#code").mask("9999");
    // Отправка номера (валидация номера)
    document.querySelector('.phone input').addEventListener('keydown', e => {
        if (e.keyCode === 13) {
            document.querySelector("button.phone").click();
        }
    })
    document.querySelector("button.phone").addEventListener('click', e => {
        let phone = $('#tel').val();
        let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
        if (!regex.test(phone)) {
            const phoneInput = document.querySelector('input.phone');
            phoneInput.style.border = '2px solid red';
            phoneInput.addEventListener('click', () => {
                phoneInput.style.border = '';
                phoneInput.value = '';
            }, {once: true})
        } else {
            fetch('/login', {
                method: 'POST',
                body: JSON.stringify({phone: phone}),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(json => {
                    if (json.result.meta.code === 200) {
                        $('span.phone').text(phone);

                        document.querySelector('div.phone').style.display = 'none';
                        document.querySelector('div.code').style.display = '';
                        let timer;
                        let x = 60;
                        countdown();
                        function countdown() {
                            document.querySelector('span.time').innerHTML = x;
                            x--;
                            if (x < 0) {
                                clearTimeout(timer);
                                document.querySelector('p.codetime').remove();
                                document.querySelector('p.codelink').style.display = '';
                            } else {
                                timer = setTimeout(countdown, 1000);
                            }
                        }
                    } else {
                        console.log(json)
                    }
                })
        }
    })
    // Повторная отправка номера
    document.querySelector("p.codelink a").addEventListener('click', e => {
        let phone = $('#tel').val();
        fetch('/login', {
            method: 'POST',
            body: JSON.stringify({phone: phone}),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                'Content-type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(json => {
                if (json.result.meta.code === 200) {
                    document.querySelector('p.codelink').remove();
                    document.querySelector('.codemessage').style.display = ''
                } else {
                    console.log(json)
                }
            })
    })
    // Отправка кода
    document.querySelector('.code input').addEventListener('keydown', e => {
        if (e.keyCode === 13) {
            document.querySelector('button.code').click();
        }
    })
    document.querySelector('button.code').addEventListener('click', e => {
        let phone = $('span.phone').html();
        let code = $('#code').val();
        let regex = /^\d{4}$/;
        const codeInput = document.querySelector('input.code');
        if (!regex.test(code)) {
            codeInput.style.border = '2px solid red';
            codeInput.addEventListener('click', () => {
                codeInput.style.border = '';
                codeInput.value = '';
            }, {once: true})
        } else {
            fetch("/login", {
                method: 'POST',
                body: JSON.stringify({phone: phone, code: code}),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-type': 'application/json'
                }
            })
                .then(response => response.json())
                .then(json => {
                    console.log(json)
                    if (json.result.meta.code === 200) {
                        window.location.href = document.referrer;
                    } else {
                        console.log(json)
                        codeInput.style.border = '2px solid red';
                        codeInput.addEventListener('click', () => {
                            codeInput.style.border = '';
                            codeInput.value = '';
                        })
                    }
                });
        }
    })
}
// logout
if (document.querySelector('div.lk__menu')) {
    (document.querySelector('a.logout')).addEventListener('click', e => {
        fetch("/logout", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                'Content-type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(json => {
                if (json.result.meta.code === 200) {
                    Cookies.remove('market_favorites')
                    Cookies.remove('market_basket')
                    location.href = location.origin;
                } else {
                    console.log(json)
                }
            })
    })
}
