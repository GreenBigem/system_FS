<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\IndContractorsRequest;
use App\Models\IndContractors;

class IndContractorsController extends Controller
{
    public function index()
    {

        $indContractors = IndContractors::where('user_id', 32)
            ->orderBy('name')
            ->take(10)
            ->get();

        return $indContractors;

    }

    public function store(IndContractorsRequest $request)
    {
        $data = $request;
        //        $data = $request->validate();
        $indContractor = IndContractors::create($data);
        return $indContractor;
    }
}
