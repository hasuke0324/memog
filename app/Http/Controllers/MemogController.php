<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemogController extends Controller
{
    /**
     * メモグ一覧を表示する
     * 
     * @return view
     */
    public function showList()
    {
        return view('memog.list');
    }
}
