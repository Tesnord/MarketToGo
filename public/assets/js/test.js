// if (document.querySelector('div.lesson-1')) {}
// if (document.querySelector('div.lesson-2')) {}
// if (document.querySelector('div.lesson-3')) {}

/*if (document.querySelector('div.lesson-4')) {
// Task 1
    document.querySelector('button.b-1').onclick = () => {
        alert('Task 1');
    }
// Task 2
    document.querySelector('input.b-2').onclick = () => {
        alert('Task 2')
    }
// Task 3
    document.querySelector('p.p-3').onclick = () => {
        alert('Task 3')
    }
// Task 4
    document.querySelector('button.b-4').onclick = () => {
        let div = document.querySelector('div.out-4');
        let checkBox = document.querySelector('input.i-4');
        if (checkBox.checked) {
            div.innerHTML = 'Yes';
        } else {
            div.innerHTML = 'No';
        }
    }
// Task 5
    document.querySelector('button.b-5').onclick = () => {
        let div = document.querySelector('div.out-5');
        let checkBox = document.querySelector('input.i-5');
        if (checkBox.checked) {
            div.innerHTML = checkBox.value;
        } else {
            div.innerHTML = false;
        }
    }
// Task 6
    document.querySelector('button.b-6').onclick = () => {
        let div = document.querySelector('div.out-6');
        let input = document.querySelector('input.i-6');
        div.innerHTML = input.value;
    }
// Task 7
    document.querySelector('button.b-7').onclick = () => {
        let input = document.querySelector('input.i-7')
        let div1 = document.querySelector('div.out-71')
        let div2 = document.querySelector('div.out-72')
        div1.innerHTML = input.value;
        if (input.value.length >= 6) {
            div2.innerHTML = 1;
        } else {
            div2.innerHTML = 0;
        }
    }
// Task 8
    document.querySelector('button.b-8').onclick = () => {
        let div8 = document.querySelector('div.out-8')
        div8.innerHTML = '<input type="text" class="i-81"><div class="out-81"></div><button class="b-81">Submit</button>';
        document.querySelector('button.b-81').onclick = () => {
            let input8 = document.querySelector('input.i-81');
            let div81 = document.querySelector('div.out-81');
            div81.innerHTML = input8.value;

        }
    }
// Task 9
    document.querySelector('button.b-9').onclick = () => {
        let div9 = document.querySelector('div.out-9');
        let input9 = document.querySelector('input.i-9')
        if (input9.checked) {
            div9.innerHTML = input9.value;
        } else {
            div9.innerHTML = 0;
        }
    }
// Task 10
    document.querySelector('button.b-10').onclick = () => {
        let input10 = document.querySelector('input.i-10');
        let div10 = document.querySelector('div.out-10');
        div10.innerHTML = '<div class="out-10" style="background: ' + input10.value + '">Task-10</div>';
    }
// Task 11
    document.querySelector('button.b-11').onclick = () => {
        let input111 = document.querySelector('input.i-111');
        let input112 = document.querySelector('input.i-112');
        input112.value = input111.value
    }
// Task 12
    document.querySelector('button.b-12').onclick = () => {
        let input12 = document.querySelector('input.i-12');
        let div12 = document.querySelector('div.out-12');
        div12.innerHTML = input12.value;
    }
// Task 13
    let input13 = document.querySelector('input.i-13');
    let div13 = document.querySelector('div.out-13');
    input13.oninput = () => {
        div13.innerHTML = input13.value;
    }
// Task 14
    document.querySelector('button.b-14').onclick = () => {
        let text14 = document.querySelector('textarea.t-14');
        let div14 = document.querySelector('div.out-14');
        div14.innerHTML = text14.value;
    }
// Task 15
    document.querySelector('button.b-15').onclick = () => {
        let input15 = document.querySelector('input.i-15');
        let text15 = document.querySelector('textarea.t-15');
        let div15 = document.querySelector('div.out-15');
        text15.value = input15.value;
        div15.innerHTML = input15.value;
    }
// Task 16
    document.querySelector('button.b-16').onclick = () => {
        let select16 = document.querySelector('select.s-16');
        let div16 = document.querySelector('div.out-16');
        div16.innerHTML = select16.value;
    }
// Task 17
    document.querySelector('select.s-17').onchange = () => {
        document.querySelector('div.out-17').innerHTML = document.querySelector('select.s-17').value;
    }
// Task 18
    document.querySelector('select.s-18').onchange = () => {
        document.querySelector('input.i-18').value = document.querySelector('select.s-18').value;
    }
// Task 19
    document.querySelector('button.b-19').onclick = () => {
        let login = document.querySelector('input.i-191');
        let password = document.querySelector('input.i-192');
        let div19 = document.querySelector('div.out-19');
        div19.innerHTML = login.value + ' | ' + password.value;
    }
// Task 20
    document.querySelector('button.b-20').onclick = () => {
        let inputs20 = document.querySelector('form.f20').elements;
        let input201 = inputs20['input201'].value;
        let input202 = inputs20['input202'].value;
        let div20 = document.querySelector('div.out-20');
        div20.innerHTML = input201 + ' | ' + input202;
    };
}*/

/*if (document.querySelector('div.lesson-5')) {
// Task-1
    document.querySelector('button.b-1').onclick = () => {
        let div1 = document.querySelector('div.out-1');
        let out = '';
        for (let i = 1; i <= 50; i++) {
            out += i + ' ';
        }
        div1.innerHTML = out;
    }
// Task-2
    document.querySelector('button.b-2').onclick = () => {
        let div2 = document.querySelector('div.out-2');
        let out = '';
        for (let i = 2; i <= 122; i = i + 2) {
            out += i + ' ';
        }
        div2.innerHTML = out;
    }
// Task-3
    document.querySelector('button.b-3').onclick = () => {
        let div3 = document.querySelector('div.out-3');
        let out = '';
        for (let i = 25; i >= 7; i--) {
            out += i + ' ';
        }
        div3.innerHTML = out;
    }
// Task-4
    document.querySelector('button.b-4').onclick = () => {
        let div4 = document.querySelector('div.out-4');
        let out = '';
        for (let i = 77; i >= 35; i = i - 3 ) {
            out += i + '_';
        }
        div4.innerHTML = out;
    }
// Task-5
    document.querySelector('button.b-5').onclick = () => {
        let div5 = document.querySelector('div.out-5');
        let out = '';
        for (let i = 1; i <= 17; i++) {
            if (i % 2 === 0) {
                out += i + '_**';
                console.log(1);
            } else {
                out += i + '_*';
                console.log(0);
            }
        }
        div5.innerHTML = out;
    }
// Task-6
    document.querySelector('button.b-6').onclick = () => {
        let div6 = document.querySelector('div.out-6');
        let input6 = document.querySelector('input.i-6');
        let out = '';
        for (let i = 0; i <= input6.value; i++) {
            out += i + '******<br>';
        }
        div6.innerHTML = out;

    }
// Task-7
    document.querySelector('button.b-7').onclick = () => {
        let div7 = document.querySelector('div.out-7');
        let input7 = document.querySelector('input.i-7');
        let out = '';
        for (let i = input7.value; i >= 0; i--) {
            out += i + ' ';
        }
        div7.innerHTML = out;
    }
// Task-8
    document.querySelector('button.b-8').onclick = () => {
        let div8 = document.querySelector('div.out-8');
        let input81 = document.querySelector('input.i-81');
        let input82 = document.querySelector('input.i-82');
        let out = '';
        for (let i = input81.value; i <= input82.value; i++) {
            out += i + ' ';
        }
        div8.innerHTML = out;
    }
// Task-9
    document.querySelector('button.b-9').onclick = () => {
        let div9 = document.querySelector('div.out-9');
        let input91 = document.querySelector('input.i-91');
        let input92 = document.querySelector('input.i-92');
        let out = '';
        if (input91.value < input92.value) {
            for (let i = input91.value; i <= input92.value; i++) {
                out += i + ' ';
            }
            div9.innerHTML = out;
        } else if (input91.value > input92.value) {
            for (let i = input92.value; i <= input91.value; i++) {
                out += i + ' ';
            }
            div9.innerHTML = out;
        }
    }
// Task-10
    document.querySelector('button.b-10').onclick = () => {
        let div10 = document.querySelector('div.out-10');
        let out = '';
        for (let i = 1950; i <= 2000; i = i + 2) {
            out += i + ' ';
        }
        div10.innerHTML = out;
    }
// Task-11
    document.querySelector('button.b-11').onclick = () => {
        let div11 = document.querySelectorAll('div.out-11');
        let div111 = document.querySelector('div.out-111');
        let out = '';
        for (let i = 0; i < div11.length; i = i + 1) {
            out += div11[i].textContent + ' ';
        }
        div111.innerHTML = out;
    }
// Task-12
    function f12() {
        let div12 = document.querySelectorAll('div.out-12');
        for (let i = 0; i < div12.length; i++) {
            div12[i].style.background = 'orange';
        }
    }
    document.querySelector('button.b-12').onclick = f12;
// Task-13
    function f13() {
        let input13 = document.querySelectorAll('input.i-13');
        for (let i = 0; i < input13.length; i = i + 1) {
            input13[i].value += i + 1;
        }
    }
    document.querySelector('button.b-13').onclick = f13;
// Task-14
    function f14() {
        let input14 = document.querySelectorAll('input.i-14[type="radio"]');
        let div14 = document.querySelector('div.out-14');
        let out = '';
        for (let i = 0; i < input14.length; i++) {
            if (input14[i].checked) {
                out = input14[i].value;
            }
        }
        div14.innerHTML = out;
    }
    document.querySelector('button.b-14').onclick = f14;
// Task-15
    function f15() {
        let div15 = document.querySelector('div.out-15');
        let out = '';
        let out2 = '';
        for (let i = 0; i < 11; i++) {
            out += 10-i + ' ' + i + ' ';
        }
        div15.innerHTML = out;
    }
    document.querySelector('button.b-15').onclick = f15;
}*/

/*if (document.querySelector('div.lesson-6')) {
// Task 1
    document.querySelector('button.b-1').onclick = () => {
        let div1 = document.querySelector('div.out-1');
        let out = '';
        for (let i = 1; i < 4; i++) {
            for (let k = 1; k < 4; k++) {
                out += '*';
            }
            out += '_';
        }
        div1.innerHTML = out;
    }
// Task 2
    document.querySelector('button.b-2').onclick = () => {
        let div2 = document.querySelector('div.out-2');
        let out = '';
        for (let i = 1; i < 4; i++) {
            out += i + '<br>';
            for (let b = 1; b < 4; b++) {
                out += '*_';
            }
            out += '<br>';
        }
        div2.innerHTML = out;
    }
// Task 3
    document.querySelector('button.b-3').onclick = () => {
        let div3 = document.querySelector('div.out-3');
        let out = '';
        for (let i = 0; i < 4; i++) {
            for (let k = 0; k < 3; k++) {
                out += '*_';
            }
            out += '<br>';
        }
        div3.innerHTML = out;
    };
// Task 4
    document.querySelector('button.b-4').onclick = () => {
        let div4 = document.querySelector('div.out-4');
        let out = '';
        for (let i = 1; i <= 3; i++) {
            out += i + '_';
            for (let k = 1; k <= 5; k++) {
                out += k + ' ';
            }
        }
        div4.innerHTML = out;
    }
// Task 5
    document.querySelector('button.b-5').onclick = () => {
        let div5 = document.querySelector('div.out-5');
        let out = '';
        for (let i = 0; i < 3; i++) {
            for (let k = 0; k < 6; k++) {
                if (k % 2 === 0) {
                    out += 1;
                } else {
                    out += 0;
                }
            }
            out += '<br>';
        }
        div5.innerHTML = out;
    }
// Task 6
    document.querySelector('button.b-6').onclick = () => {
        let div6 = document.querySelector('div.out-6');
        let out = '';
        for (let i = 0; i < 3; i++) {
            for (let k = 1; k < 6; k++) {
                if (k % 2 === 0) {
                    out += 1;
                } else if (k % 3 === 0) {
                    out += 'x';
                } else {
                    out += 0;
                }
            }
            out += '<br>';
        }
        div6.innerHTML = out;
    }
// Task 7
    document.querySelector('button.b-7').onclick = () => {
        let div7 = document.querySelector('div.out-7');
        let out = '';
        for (let i = 1; i <= 5; i++) {
            for (let k = 1; k <= i; k++) {
                out += '*';
            }
            out += '<br>';
        }
        div7.innerHTML = out;
    }
// Task 8
    document.querySelector('button.b-8').onclick = () => {
        let div8 = document.querySelector('div.out-8');
        let out = '';
        for (let i = 5; i >= 1; i--) {
            for (let k = 1; k <= i; k++) {
                out += '*';
            }
            out += '<br>';
        }
        div8.innerHTML = out;
    }
// Task 9
    document.querySelector('button.b-9').onclick = () => {
        let div9 = document.querySelector('div.out-9');
        // let out = '';
        // for (let i = 1; i <= 5; i++) {
        //     out += i + ' ';
        //     for (let k = 2; k <= i; k++) {
        //         out += 1 + i;
        //     }
        //     out += '<br>';
        // }
        // div9.innerHTML = out;
        div9.innerHTML = 'Костыль!!!';
    }
// Task 10
    document.querySelector('button.b-10').onclick = () => {
        let div10 = document.querySelector('div.out-10');
        let out = "";
        for (i = 0; i < 5; i++) {
            for (k = 1; k <= 10; k++) {
                if (k === 10) {
                    out += `${i + 1}0`;
                } else {
                    out += `${i}${k} `;
                }
            }
            out += "<br>";
        }

        div10.innerHTML = out;
    }
}*/

/*if (document.querySelector('div.lesson-7')) {
// Task 1
    let a1 = 8;
    function f1() {
        document.querySelector('div.out-1').innerHTML = a1;
    }
    document.querySelector('button.b-1').onclick = f1;
// Task 2
    let a2 = 8;
    function f2() {
        return a2;
    }
    document.querySelector('button.b-2').onclick = function () {
        document.querySelector('div.out-2').textContent = f2();
    }
// Task 3
    function f3(a, b) {
        return a * b;
    }
    document.querySelector('button.b-31').onclick = function () {
        document.querySelector('div.out-31').textContent = f3(3, 4);
    }
    document.querySelector('button.b-32').onclick = function () {
        document.querySelector('div.out-32').textContent = f3(5, 6);
    }
// Task 4
    function f4(a) {
        return 2021 - a;
    }
    document.querySelector('button.b-4').onclick = function () {
        document.querySelector('div.out-4').textContent = f4(1995);
    }
// Task 5
    function f5(name) {
        return 'Hello '+name;
    }
    document.querySelector('button.b-5').onclick = function () {
        document.querySelector('div.out-5').textContent = f5('Nord');
    }
// Task 6
    function f6(a,b) {
        a = Math.ceil(a);
        b = Math.floor(b);
        return Math.floor(Math.random() * (b - a)) + a;
    }
    document.querySelector('button.b-6').onclick = function () {
        document.querySelector('div.out-6').textContent = f6(1,6);
    }
// Task 7
    function f7(a,b) {
        a = Math.ceil(a);
        b = Math.floor(b);
        return Math.floor(Math.random() * (b - a)) + a;
    }
    document.querySelector('button.b-7').onclick = function () {
        document.querySelector('div.out-7').style.backgroundColor =
            'rgb('+f7(0, 255)+', '+f7(0, 255)+', '+f7(0, 255)+')';
    }
// Task 8
    function f8(string) {
        return string.trim();
    }
    document.querySelector('button.b-8').onclick = function () {
        document.querySelector('div.out-8').textContent = f8('   text content    ');
    }
// Task 9
    function f9(a) {
        if (a % 2 === 0) {
            return 'true';
        } else {
            return 'false';
        }
    }
    document.querySelector('button.b-9').onclick = function () {
        document.querySelector('div.out-9').textContent = f9(92);
    }
// Task 10
    function f10(a,b) {
        if (a <= b) {
            return b;
        } else if (a >= b) {
            return a;
        }
    }
    document.querySelector('button.b-10').onclick = function () {
        document.querySelector('div.out-10').textContent = f10(20,20);
    }
}*/

/*if (document.querySelector('div.lesson-8')) {
//  Task 1
    function t1() {
        let i = 0;
        let out = '';
        while (i < 50) {
            i++;
            out += i+' ';
        }
        document.querySelector('div.out-1').textContent = out;
    }
    document.querySelector('.b-1').onclick = t1;
//  Task 2
    function t2() {
        let i = 0;
        let out = '';
        while (i < 122) {
            i = i+2;
            out += i+' ';
        }
        document.querySelector('div.out-2').innerHTML = out;
    }
    document.querySelector('.b-2').onclick = t2;
//  Task 3
    function t3() {
        let i = 26;
        let out = '';
        while (i > 7) {
            i--;
            out += i+' ';
        }
        document.querySelector('div.out-3').textContent = out;
    }
    document.querySelector('.b-3').onclick = t3;
//  Task 4
    function t4() {
        let i = 77;
        let out = '';
        while (i > 34) {
            out += i+'_';
            i -= 3;
        }
        document.querySelector('div.out-4').textContent = out;
    }
    document.querySelector('.b-4').onclick = t4;
//  Task 5
    function t5() {
        let i = 0;
        let out = '';
        while (i < 17){
            i++;
            if (i % 2 === 0) {
                out += i+'_**';
            } else {
                out += i+'_*';
            }
        }
        document.querySelector('div.out-5').textContent = out;
    }
    document.querySelector('.b-5').onclick = t5;
//  Task 6
    function t6() {
        let input6 = document.querySelector('input.i-6');
        let a = 0;
        let b = 0;
        let out = '';
        while (a < input6.value) {
            a++;
            out += '******<br>';
        }
        document.querySelector('div.out-6').textContent = out;
    }
    document.querySelector('.b-6').onclick = t6;
//  Task 7
    function t7() {
        let input7 = document.querySelector('input.i-7');
        let i = input7.value;
        let out = '';
        while (i > 0) {
            i--;
            out += i+' ';
        }
        document.querySelector('div.out-7').textContent = out;
    }
    document.querySelector('.b-7').onclick = t7;
//  Task 8
    function t8() {
        let a = document.querySelector('input.i-81').value;
        let b = document.querySelector('input.i-82').value;
        let out = '';
        while (a < b) {
            a++;
            out += a+' ';
        }
        document.querySelector('div.out-8').textContent = out;
    }
    document.querySelector('.b-8').onclick = t8;
//  Task 9
    function t9() {
        let a = document.querySelector('input.i-91').value;
        let b = document.querySelector('input.i-92').value;
        let out = '';
        if (a < b) {
            while (a < b) {
                out += a+' ';
                a++;
            }
        } else if (b < a) {
            while (b < a) {
                b++;
                out += b+' ';
            }
        }
        document.querySelector('div.out-9').textContent = out;
    }
    document.querySelector('.b-9').onclick = t9;
//  Task 10
    function t10() {
        let i = 1950;
        let out = '';
        while (i < 2000) {
            out += i+' ';
            i = i + 2;
        }
        document.querySelector('div.out-10').textContent = out;
    }
    document.querySelector('.b-10').onclick = t10;
//  Task 11
    function t11() {
        let div11 = document.querySelectorAll('div.div-11');
        let out = '';
        let i = 0;
        while (i < div11.length) {
            out += div11[i].textContent + ' ';
            i++;
        }
        document.querySelector('div.out-111').innerHTML = out;
    }
    document.querySelector('.b-11').onclick = t11;
//  Task 12
    function t12() {
        let div12 = document.querySelectorAll('div.div-12');
        let i = 0;
        let out = '';
        while (i < div12.length) {
            out += div12[i].style.background='orange';
            i++;
        }
        div12.innerHTML = out;
    }
    document.querySelector('.b-12').onclick = t12;
//  Task 13
    function t13() {
        let input13 = document.querySelectorAll('input.i-13');
        let i = 0;
        while (i < input13.length) {
            input13[i].value += i+1;
            i++;
        }
    }
    document.querySelector('.b-13').onclick = t13;
//  Task 14
    function t14() {
        let input14 = document.querySelectorAll('input.i-14[type="radio"]');
        let i = 0;
        let out = '';
        while (i < input14.length) {
            if (input14[i].checked) {
                out = input14[i].value;
            }
            i++;
        }
        document.querySelector('div.out-14').textContent = out;
    }
    document.querySelector('.b-14').onclick = t14;
//  Task 15
    function t15() {
        let div15 = document.querySelector('div.out-15');
        let out = '';
        let i = 0;
        while (i < 11){
            out += 10-i + ' ' + i + ' ';
            i++;
        }
        document.querySelector('div.out-15').textContent = out;
    }
    document.querySelector('.b-15').onclick = t15;
}*/

