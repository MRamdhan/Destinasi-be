<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $des = Destination::all();

        return response()->json([
            'Destination' => $des,
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'foto' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ], 403);
        }

        $des = new Destination();
        $des->foto = $request->foto;
        $des->nama = $request->nama;
        $des->alamat = $request->alamat;
        $des->link = $request->link;
        $des->deskripsi = $request->deskripsi;
        $des->save();

        if($des){
            return response()->json([
                'message' => 'Destinasi Berhasil di Tambah',
                'destination' => $des
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $des = Destination::where('id', $id)->first();

        if($des){
            return response()->json([
                'destination' => $des
            ], 200);
        }

        if(!$des){
            return response()->json([
                'message' => 'Id Tidak Sah'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'foto' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ], 403);
        }

        $des = Destination::where('id', $id)->first();
        if($des){
            $des->foto = $request->foto;
            $des->nama = $request->nama;
            $des->alamat = $request->alamat;
            $des->link = $request->link;
            $des->deskripsi = $request->deskripsi;
            $des->save();

            return response()->json([
                'message' => 'Berhasil di Update',
                'destination' => $des
            ], 200);
        }
        if(!$des){
            return response()->json([
                'message' => 'ID Tidak Sah'
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $des = Destination::where('id', $id)->first();
        if(!$des){
            return response()->json([
                'message' => 'ID Tidak Sah'
            ], 404);
        }
        if($des->delete()){
            return response()->json([
                'message' => 'Berhasil Dihapus'
            ], 200);
        }
    }
}
