<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //仮実装
    public function getCustomers(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Customer::query()->select(['id', 'name'])->get());
    }

    public function postCustomers(Request $request)
    {
        /* 独自のバリデーション
        if (!$request->json('name')) {
            return response()
                ->make('', \Illuminate\http\Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $customer = new Customer();
        $customer->name = $request->json('name');
        $customer->save();
        */

        //validateメソッドを使ったバリデーションの実装
        $this->validate(
            $request,
            ['name' => 'required'],
        );
        $customer = new \App\Models\Customer();
        $customer->name = $request->json('name');
        $customer->save();
    }

    public function getCustomer()
    {
    }
    public function putCustomer()
    {
    }
    public function deleteCustomer()
    {
    }
    public function getReports()
    {
    }
    public function postReport()
    {
    }
    public function getReport()
    {
    }
    public function putReport()
    {
    }
    public function deleteReport()
    {
    }
}
