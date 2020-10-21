<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $this->authorize('viewAny', $user);  // Policy をチェック
        $users = \App\Models\User::get(); // 社員一覧を取得
        return view('users.index', compact('users')); // users.index.bldae を呼出し、 usersを渡す
    }
}
