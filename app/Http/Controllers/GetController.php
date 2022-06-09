<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class GetController extends Controller
{
    public function __invoke() {

        $user = Auth::user();
        return $user;
    }
}
