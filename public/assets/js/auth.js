if (document.querySelector("div.registration")) {
    document.querySelector("p.codelink").addEventListener('click', e => {
        document.querySelector('div.phone').style.display = '';
        document.querySelector('div.code').style.display = 'none';
        document.querySelector('p.codelink').style.display = 'none';
        document.querySelector('p.codetime').style.display = '';
        document.querySelector('input.code').value = '';
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
            }).then(response => {
                if (response.ok) {
                    $('span.phone').text(phone);
                    // console.log(response.json())
                    return response.json()
                } else {
                    return response.json().then(error => {
                        const e = new Error('Что-то пошло не так')
                        e.data = error
                        throw e

                    })
                }
            }).then((json) => console.log(json));
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
        }
    })
    document.querySelector('button.code').addEventListener('click', e => {
        let phone = $('span.phone').html();
        let code = $('#code').val();
        fetch("/login", {
            method: 'POST',
            body: JSON.stringify({phone: phone, code: code}),
            headers: {'Content-type': 'application/json'}
        }).then(response => {
            if (response.ok) {
                // window.location.href = '/personal';
                return response.json();
            } else {
                return response.json().then(error => {
                    codeInput.style.border = '2px solid red';
                    const e = new Error('Что-то пошло не так')
                    e.data = error
                    throw e
                })
            }
        }).then((json) => console.log(json));
    })
}


