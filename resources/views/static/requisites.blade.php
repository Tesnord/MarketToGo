@extends('layouts.layout')

@section('content')

    <div class="documents">
        <div class="container">
            <div class="breadcrumb-block">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('requisites') }}
            </div>
            <div class="title-main">
                <div class="title-main__inner">
                    <h1>Реквизиты</h1>
                </div>
            </div>
                <div class="policy__inner">
                    <table class="requisites">
                        <tbody>
                        <tr>
                            <th>
                                <p>ИП</p>
                            </th>
                            <td>
                                <p>Харцызов Аслан Мухарбиевич</p>
                                <p>Свидетельство серия 26 № 004100709, выдано 31.01.2014 г. МИФНС №11 по Ставропольскому краю</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>ИНН</p>
                            </th>
                            <td>
                                <p>090108079469</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>ОГРНИП</p>
                            </th>
                            <td>
                                <p>310091704900012</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>р/сч</p>
                            </th>
                            <td>
                                <p>40802810500980111457</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>к/сч</p>
                            </th>
                            <td>
                                <p>30101810145250000411</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>БИК</p>
                            </th>
                            <td>
                                <p>044525411</p>
                                <p>Филиал «Центральный» Банка ВТБ (ПАО) в г. Москве</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Юридический адрес</p>
                            </th>
                            <td>
                                <p>РФ, г. Москва, пос. Сосенское, п. Коммунарка, ул. Александры Монаховой, д. 88, к. 2, кв. 366</p>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>Почтовый адрес/Фактический адрес</p>
                            </th>
                            <td>
                                <p>369006, Карачаево-Черкесская Республика,  г. Черкесск, ул.Кавказская, 153 В</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

@endsection
