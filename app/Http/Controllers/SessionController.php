<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Administrator;

class SessionController extends Controller
{
    public function create() {
        return view("sessions.login_form");
    }

    public function store(Request $request) {
        $administrator = Administrator::where("password", hash("sha512", hash("sha512", $request->input("password"))))->first();
        if ($administrator) {
            session(["login" => true]);
            $notice = "login successful!";
            return view("admin.index", compact($notice));
        } else {
            $alert = "wrong password inputed.";
            return back()->with("alert", $alert);
        }
    }

    public function destroy() {
        session(["login" => false]);
        $notice = "logout successful!";
        return redirect()->route("root")->with("notice", $notice);
    }
}
