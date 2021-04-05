<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JabatanModel;

class JabatanController extends Controller
{

    public function __construct()
    {
        $this->JabatanModel = new JabatanModel();
        $this->middleware('auth');
    }

    public function jabatan()
    {
        $data =[
            'jabatan' => $this->JabatanModel->allData(),
        ];
        return view('jabatan', $data);
    }

    
    public function print()
    {
        $data =[
            'jabatan' => $this->JabatanModel->allData(),
        ];
        return view('print', $data);
    }
}