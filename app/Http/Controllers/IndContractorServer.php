<?php

namespace App\Http\Controllers;

use App\Models\IndContractors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndContractorServer extends Controller
{

    /**
     * В Функции index мы получаем всех контрагентов
     * по id идентифицированного пользователя
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user_id = Auth::id();
        $indContractors = IndContractors::where('user_id', $user_id)
            ->orderBy('surname')
            ->get();
        return $indContractors;
    }

    /**
     * Функция create создания нового контрагента
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * При передачи id контрагента функция show возвращает
     * все данные контрагента
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * При получении id контрагента функция destroy
     * удаляет соответствующего контрагенты
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        IndContractors::destroy($id);
    }
}
