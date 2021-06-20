<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ApiModel;

class ApiController extends Controller
{
    public function index()
    {
        return ApiModel::all();
    }

    public function create(Request $request)
    {
        $ujian = new ApiModel;
        $ujian->nama = $request->nama;
        $ujian->jenis = $request->jenis;
        $ujian->harga = $request->harga;
        $ujian->save();

        return "Data berhasil ditambah!";
    }

    public function update(Request $request, $id)
    {
        $ujian = ApiModel::find($id);
        $ujian->nama = $request->nama;
        $ujian->jenis = $request->jenis;
        $ujian->harga = $request->harga;
        $ujian->update();

        return "Data berhasil diubah!";
    }

    public function delete($id)
    {
        $ujian = ApiModel::find($id);
        $ujian->delete();

        return "Data berhasil dihapus!";
    }
}
