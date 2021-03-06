<?php

namespace App\Http\Controllers;

use App\Models\Models\Memog;
use Illuminate\Http\Request;
use App\Http\Controllers\MemogController;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MemogRequest;

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
    /**
     * メモグ登録画面を表示する
     * 
     * @return view
     */
    public function showCreate()
    {
        return view('memog.form');
    }
    /**
     * メモグを登録する
     * 
     * @return view
     */
    public function exeStore(MemogRequest $request)
    {
        // メモグのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            Memog::create($inputs);
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを登録しました。');
        return redirect(route('memogs'));
    }
    /**
     * メモグ編集フォームを表示する
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $memog = DB::table('memogs')->find($id);

        if (is_null($memog)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('memogs'));
        }

        return view('memog.edit', ['memog' => $memog]);
    }
    /**
     * メモグを更新する
     * 
     * @return view
     */
    public function exeUpdate(MemogRequest $request)
    {
        // メモグのデータを受け取る
        $inputs = $request->all();

        \DB::beginTransaction();
        try {
            // メモグを更新
            $memog = Memog::find($inputs['id']);
            $memog->fill([
                'title' => $inputs['title'],
                'content' => $inputs['content'],
            ]);
            $memog->save();
            \DB::commit();
        } catch(\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'ブログを更新しました。');
        return redirect(route('memogs'));
    }
    /**
     * メモグ削除
     * @param int $id
     * @return view
     */
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('memogs'));
        }

        try{
            // ブログを削除
            Memog::destroy($id);
        } catch(\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', '削除しました。');
        return redirect(route('memogs'));
    }
}