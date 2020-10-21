<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $roles = \App\Models\Role::get(); // 役職一覧を取得
        return view('roles.index', compact('roles'));  // $roles一覧情報を渡して roles./index.blade.phpを呼びます
    }
}
