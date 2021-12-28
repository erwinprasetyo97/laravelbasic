<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index(){
        return view('formulir');
    }
    public function action(){
        return 'Keluhan berhasil disimpan';
    }

    public function detail($id)
    {
        return 'Id Anda adalah'. $id;
    }
}
