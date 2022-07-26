@extends('layouts.layout')

@section('content')

    <div class="documents">
        <div class="container">
            <div class="breadcrumb-block">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('documents') }}
            </div>
            <div class="title-main">
                <div class="title-main__inner">
                    <h1>Реквизиты</h1>
                </div>
            </div>
                <div class="policy__inner">
                    <p>ИП Харцызов Аслан Мухарбиевич<br>
                        Свидетельство серия 26 № 004100709, выдано 31.01.2014 г. МИФНС №11 по Ставропольскому краю<br>
                        ИНН 090108079469<br>
                        ОГРНИП 310091704900012<br>
                        р/сч   40802810500980111457<br>
                        к/сч   30101810145250000411<br>
                        БИК 044525411<br>
                        Филиал «Центральный» Банка ВТБ (ПАО) в г. Москве<br>
                        Юридический адрес: РФ, г. Москва, пос. Сосенское, п. Коммунарка, ул. Александры Монаховой, д. 88, к. 2, кв. 366<br>
                        Почтовый адрес/Фактический адрес: 369006, Карачаево-Черкесская Республика,  г. Черкесск, ул.Кавказская, 153 В<br>
                    </p>
                </div>
        </div>
    </div>

@endsection
