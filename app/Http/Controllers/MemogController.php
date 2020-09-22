<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MemogController;
use Illuminate\Support\Facades\DB;

class MemogController extends Controller
{
    /**
     * メモグ一覧を表示する
     * 
     * @return view
     */
    public function showList()
    {
        $memogs = DB::table('memogs')->get();

        return view('memog.list', ['memogs' => $memogs]);
    }
}