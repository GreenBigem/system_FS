<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class MainServer extends Controller
{
    /**
    * Provision a new web server.
    *
    * @return \Illuminate\Http\Response
    */

    public function __invoke()
    {
        return view('main');
    }
}
