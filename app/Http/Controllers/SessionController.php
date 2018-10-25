<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Administrator;

class SessionController extends Controller
{
    public function create() {
        return view("sessions.login_form");
    }

    public function store() {
        $administrator = Administraot::where("password", hash("sha512", hash("sha512", $request->input("password"))))->first();
        if ($administrator) {
            session(["login" => true]);
            $notice = "ログインが完了しました";
            return view("admin.index", compact($notice));
        } else {
            $alert = "ログインに失敗しました";
            return back()->with("alert", $alert);
        }
    }

    public function destory() {
        session(["login" => false]);
        $notice = "ログアウトしました";
        return redirect()->route("root")->with("notice", $notice);
    }
}
