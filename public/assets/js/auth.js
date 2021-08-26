// Авторизация
if (document.querySelector("div.registration")) {
    $("#tel").mask("8(999) 999-9999");
    // $("#code").mask("9999");
    // Отправка номера (валидация номера)
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
                    if (json.status === 'ok') {
                        $('span.phone').text(phone);
                        $('span.newCode').text(json.code.debug);

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
                                document.querySelector('p.codetime').style.display = 'none';
                                document.querySelector('p.codelink').style.display = '';
                            } else {
                                timer = setTimeout(countdown, 1000);
                            }
                        }
                    } else {
                        log('errors')
                    }
                })
        }
    })
    // Отправка кода
    document.querySelector('button.code').addEventListener('click', e => {
        let phone = $('span.phone').html();
        let code = $('#code').val();
        fetch("/login", {
            method: 'POST',
            body: JSON.stringify({phone: phone, code: code}),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'X-Requested-With': 'XMLHttpRequest',
                'Content-type': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = '/personal';
            } else {
                response.text().then(error => {
                    const codeInput = document.querySelector('input.code');
                    codeInput.style.border = '2px solid red';
                    codeInput.addEventListener('click', () => {
                        codeInput.style.border = '';
                        codeInput.value = '';
                    })
                    log(error)
                })
            }
        });
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
                if (json.status === 'ok') {
                    location.href = json.uri;
                    log('ok')
                } else {
                    log('error')
                }
            })
    })
}
