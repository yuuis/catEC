<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Product;
use App\Http\Models\Purchase;
use App\Http\Models\User;

class PurchaseController extends Controller
{
    public function create(String $productId) {
        $product = Product::where("id", $productId)->first();
        return view("purchases.create", compact("product"));
    }

    public function index() {

    }

    public function show() {

    }

    public function store(Request $request) {
        $inputs = $request->all();
        $rules = [
            "inputName" => "required|max:100",
            "inputEmail" => "required|max:1000|email",
            "inputPhoneNumber" => "required",
            "inputAddress" => "required|max:300",
        ];
        $messages = [
            "inputName.required" => "名前を入力してください",
            "inputEmail.required" => "メールアドレスを入力してください",
            "inputEmail.email" => "メールアドレスを正しく入力してください",
            "inputPhoneNumber.required" => "電話番号を入力してください",
            "inputAddress.required" => "住所をしてください",
        ];

        $validator = Validator::make($inputs, $rules, $messages);
        
        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $form = [
                "name" => $request->input("inputName"),
                "email" => $request->input("inputEmail"),
                "phone_number" => $request->input("inputPhoneNumber"),
                "address" => $request->input("inputAddress"),
            ];
            $user->fill($form);

            if ($user->save()) {
                $purchase = new Purchase();
                $purchase->user_id = $user->id;
                $purchase->product_id = $request->input("productId");
                $purchase->save();
                return view("purchases.success");
            } else {
                return back()->withinput();
            }
        }
    }
}
