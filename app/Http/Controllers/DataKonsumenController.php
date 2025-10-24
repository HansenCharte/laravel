<?php

namespace App\Http\Controllers;

use App\Models\DataKonsumen;
use App\Http\Requests\StoreDataKonsumenRequest;
use App\Http\Requests\UpdateDataKonsumenRequest;

use function PHPUnit\Framework\callback;

class DataKonsumenController extends Controller
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
     * @param  \App\Http\Requests\StoreDataKonsumenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataKonsumenRequest $request)
    {
        $validasi=$request->validate([
            "Nama"=>"required",
            "Email"=>"required",
            "Number"=>"required",
            "Message"=>"required",
            "Waktu"=>"required",
            "Tanggal"=>"required",
        ]);
        if (date('H') === $validasi["Waktu"])
        {
            return back()->with('err', 'Tidak dapat membuat janji temu pada waktu ini');
        }
        DataKonsumen::create($validasi);
        return back()->with('success', 'Berhasil Membuat Janji Temu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKonsumen  $dataKonsumen
     * @return \Illuminate\Http\Response
     */
    public function show(DataKonsumen $dataKonsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKonsumen  $dataKonsumen
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKonsumen $dataKonsumen)
    {
        return view("home.edit",[
            "konsumen"=>$dataKonsumen
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataKonsumenRequest  $request
     * @param  \App\Models\DataKonsumen  $dataKonsumen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataKonsumenRequest $request, DataKonsumen $dataKonsumen)
    {
        $validasi=$request->validate([
            "Nama"=>"required",
            "Email"=>"required",
            "Number"=>"required",
            "Message"=>"required",
            "Waktu"=>"required",
            "Tanggal"=>"required",
        ]);
        if (date('H') === $validasi["Waktu"])
        {
            return redirect("/")->with('err', 'Tidak dapat membuat janji temu pada waktu ini');
        }
        DataKonsumen::where('id', $dataKonsumen->id)->update($validasi);
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKonsumen  $dataKonsumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKonsumen $dataKonsumen)
    {
        $dataKonsumen->delete();
        return back();
    }
}
