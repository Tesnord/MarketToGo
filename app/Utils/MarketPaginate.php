<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class MarketPaginate
{
    /*// Вывод пагинации
    public function hasPages()
    {

    }
    // Первая страница
    public function getFirstPage()
    {

    }
    // Предыдущая страница
    public function previousPageUrl()
    {

    }
    // Текущая страница
    public function pageUrl()
    {

    }
    // Следующая страница
    public function nextPageUrl()
    {

    }
    // Последняя страница
    public function getLastPage()
    {

    }*/

    public function paginate($url, $length)
    {
        // Получаем массив
        $items = Http::get($url)->json();
        // Получаем страницу
        $page = $_GET['page'] ?? 1;
        // Количество элементов на странице
        $itemsPage = $length;
        // Всего страниц
        $total_pages = ceil(count($items) / $itemsPage);
        // Начало массива элементов страницы
        $offset = $itemsPage * ($page - 1);
        if ($page > 1) {
            $items = array_slice($items, $offset, $length);
        } else {
            $items = array_slice($items, 0, $length);
        }
        // Страница => Ссылка
        $arr = [];
        for($i = 1; $i <= $total_pages; $i++) {
            $arr += [$i => '?page='.$i];
        }
        return [
            'items' => $items,
            'start_item_page' => $offset,
            'count_items' => $itemsPage,
            'page' => $page,
            'total_pages' => $total_pages,
            'pages' => $arr,
        ];
    }
}
