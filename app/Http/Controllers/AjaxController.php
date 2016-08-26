<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class AjaxController extends Controller {

    //
    public function checkUN(Request $req) {
        $msg = "";

        if (User::where('email', $req->email)->exists()) {
            $msg = "This username is already in use.";
        } else {
            $msg = "username available.";
        }

        return response()->json(array('msg' => $msg), 200);
    }

}
