<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Item;

class MaatwebsiteController extends Controller
{
    public function downloadExcel()
    {
            $prepareData = [];
            $prepareData[] = array(
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 'Поставщик'),
                iconv("windows-1251", "UTF-8", '[ 322 ] '.'RU'),
                iconv("windows-1251", "UTF-8", 'test'),
                iconv("windows-1251", "UTF-8", 'не проставлено'),
                iconv("windows-1251", "UTF-8", 'Да'),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 1),
                iconv("windows-1251", "UTF-8", 'Да')
            );
            $export = new Item($prepareData, [
                iconv("windows-1251", "UTF-8", 'Код'),
                iconv("windows-1251", "UTF-8", 'Потребитель\Поставщик'),
                iconv("windows-1251", "UTF-8", 'Процесс'),
                iconv("windows-1251", "UTF-8", 'Ресурс'),
                iconv("windows-1251", "UTF-8", 'Внешний\Внутренний'),
                iconv("windows-1251", "UTF-8", 'На удаление'),
                iconv("windows-1251", "UTF-8", 'Статус'),
                iconv("windows-1251", "UTF-8", 'Кем привязано'),
                iconv("windows-1251", "UTF-8", 'Дата привязки'),
                iconv("windows-1251", "UTF-8", 'Комментарий привязки'),
                iconv("windows-1251", "UTF-8", 'Кем подтверждено'),
                iconv("windows-1251", "UTF-8", 'Дата пожтверждения'),
                iconv("windows-1251", "UTF-8", 'Комментарий пожтверждения'),
                iconv("windows-1251", "UTF-8", 'Контроль')
            ]);
            return Excel::download($export, 'InOuts.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }
}
