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
        $data = new ApiModel;
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->save();

        return "Data berhasil ditambah!";
    }

    public function update(Request $request, $id)
    {
        $data = ApiModel::find($id);
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->update();

        return "Data berhasil diubah!";
    }

    public function delete($id)
    {
        $data = ApiModel::find($id);
        $data->delete();

        return "Data berhasil dihapus!";
    }
}
