<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $data= [
            "daftarPelanggan" =>
            [
                [
                    "nama" => "Erwin",
                    "phone" => "089695372492",
                    "kelamin" => "P",
                    "alamat" => "Pati"
                ],
                [
                    "nama" => "Broto",
                    "phone" => "0896953724943",
                    "kelamin" => "L",
                    "alamat" => "Semarang"
                ],
                [
                    "nama" => "Joko",
                    "phone" => "085695372492",
                    "kelamin" => "L",
                    "alamat" => "Wonosobo"
                ],
            ]
        ];
        return view('pelanggan.index', $data);
    }
    public function create()
    {
        return view('pelanggan.create');
    }
    public function store()
    {
        return 'Pelanggan berhasil ditambahkan';
    }
    public function show($id)
    {
        return view('pelanggan.show');
    }

    public function edit($id)
    {
        $data = ["id"=> $id];
        return view('pelanggan.edit',$data);
    }
    public function update()
    {
        return 'Pelanggan berhasil diubah';
    }

    public function destroy()
    {
        return 'Pelanggan berhasil dihapus';
    }
}
