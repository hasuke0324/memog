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
    /**
     * メモグ詳細を表示する
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $memog = DB::table('memogs')->find($id);

        if (is_null($memog)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('memogs'));
        }

        return view('memog.detail', ['memog' => $memog]);
    }
}