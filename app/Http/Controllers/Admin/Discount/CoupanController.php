<?php

namespace App\Http\Controllers\discount;

use App\Http\Controllers\Controller;
use App\Models\Admin\Discount\Coupan;
use App\Http\Requests\StoreCoupanRequest;
use App\Http\Requests\UpdateCoupanRequest;

class CoupanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
     * @param  \App\Http\Requests\StoreCoupanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoupanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Http\Response
     */
    public function show(Coupan $coupan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupan $coupan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoupanRequest  $request
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoupanRequest $request, Coupan $coupan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Discount\Coupan  $coupan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupan $coupan)
    {
        //
    }
}
