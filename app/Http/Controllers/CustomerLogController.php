<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerLog;
use Illuminate\Http\Request;

class CustomerLogController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Customer $customer)
    {
        $attribute = $this->validateLog();
        $attribute['customer_id'] = $customer['id']; // カスタマーIDを記録
        $attribute['user_id'] = auth()->user()['id']; // ログを記録した人を保存
        $customerLog = CustomerLog::create($attribute);
        return back();
    }

    protected function validateLog()
    {
        return request()->validate([
            'log' => ['required', 'min:1', 'max:100'],
        ]);
    }

}
