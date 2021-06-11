<?php

namespace App\Http\Controllers;

use App\UseCases\Section\StoreUseCase;
use Illuminate\Http\Request;

class SectionController extends Controller
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
        return view("section.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StoreUseCase $useCase)
    {
        $request->validate([
            "name" => "required|string|max:15",
            "photo1" => "required|file|image|max:1000",
            "photo1_detail" => "required|string|max:100",
            "photo2" => "required|file|image|max:1000",
            "photo2_detail" => "required|string|max:100",
            "photo3" => "required|file|image|max:1000",
            "photo3_detail" => "required|string|max:100",
        ]);

        $result = $useCase($request);
        if ($result) {
            return redirect()->route("section.create-end");
        } else {
            return redirect()->route("section.create");
        }
    }

    public function createEnd() {
        return view("section.create-end");
    }

    /**
     * Display the specified resource.
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
