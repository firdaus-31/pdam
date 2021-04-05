<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\PegawaiModel;
use Dompdf\Dompdf;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->PegawaiModel = new PegawaiModel();
        $this->middleware('auth');
    }

    public function pegawai()
    {
        $data =[
            'pegawai' => $this->PegawaiModel->allData(),
        ];
        return view('pegawai', $data);
    }

    public function print()
    {
        $data =[
            'pegawai' => $this->PegawaiModel->allData(),
        ];
        return view('print', $data);
    }

    public function printpdf()
    {
        $data =[
            'pegawai' => $this->PegawaiModel->allData(),
        ];
        $html = view('printpdf', $data);
            // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
        $dompdf->render();

// Output the generated PDF to Browser
        $dompdf->stream();
    
    }

    public function detail($id_pegawai)
    {
        if (!$this->PegawaiModel->detailData($id_pegawai)) {
            abort(404);
        }
        $data =[
            'pegawai' => $this->PegawaiModel->detailData($id_pegawai),
        ];
        return view('detailpegawai', $data);
    }

    public function add()
    {
        return view ('addpegawai');
    }

    public function insert()
    {
        Request()->validate([
            'nik' => 'required|unique:tbl_pegawai,nik|min:2|max:9',
            'nama_pegawai' => 'required',
            'golongan' => 'required',
            'tgl_lahir' => 'required',
            'tgl_pensiun' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'area' => 'required',
        ], [
            'nik.required' => 'Wajib Diisi !!',
            'nik.unique' => 'Nik Sudah Ada !!!',
            'nik.min' => 'Min 2 Karakter !!',
            'nik.max' => 'Min 9 Karakter !!',
            'nama_pegawai.required' => 'Wajib Diisi !!',
            'golongan.required' => 'Wajib Diisi !!',
            'tgl_lahir.required' => 'Wajib Diisi !!',
            'tgl_pensiun.required' => 'Wajib Diisi !!',
            'jabatan.required' => 'Wajib Diisi !!',
            'divisi.required' => 'Wajib Diisi !!',
            'area.required' => 'Wajib Diisi !!',
        ]); //jika validasi tidak ada maka lakukan simpan data 
            

        $data = [
            'nik' => Request()->nik,
            'nama_pegawai' => Request()->nama_pegawai,
            'golongan' => Request()->golongan,
            'tgl_lahir' => Request()->tgl_lahir,
            'tgl_pensiun' => Request()->tgl_pensiun,
            'jabatan' => Request()->jabatan,
            'divisi' => Request()->divisi,
            'area' => Request()->area,
        ];

        $this->PegawaiModel->addData($data);
        return redirect()->route('pegawai')->with('pesan', 'Data Berhasil Ditambahkan !!');
    }

    public function edit($id_pegawai)
    {
        if (!$this->PegawaiModel->detailData($id_pegawai)) {
            abort(404);
        }
        $data =[
            'pegawai' => $this->PegawaiModel->detailData($id_pegawai),
        ];
        return view ('editpegawai', $data );
    }

    public function update($id_pegawai)
    {
        Request()->validate([
            'nik' => 'required|min:2|max:9',
            'nama_pegawai' => 'required',
            'golongan' => 'required',
            'tgl_lahir' => 'required',
            'tgl_pensiun' => 'required',
            'jabatan' => 'required',
            'divisi' => 'required',
            'area' => 'required',
        ], [
            'nik.required' => 'Wajib Diisi !!',
            'nik.min' => 'Min 2 Karakter !!',
            'nik.max' => 'Min 9 Karakter !!',
            'nama_pegawai.required' => 'Wajib Diisi !!',
            'golongan.required' => 'Wajib Diisi !!',
            'tgl_lahir.required' => 'Wajib Diisi !!',
            'tgl_pensiun.required' => 'Wajib Diisi !!',
            'jabatan.required' => 'Wajib Diisi !!',
            'divisi.required' => 'Wajib Diisi !!',
            'area.required' => 'Wajib Diisi !!',
        ]); //jika validasi tidak ada maka lakukan simpan data 
            

        $data = [
            'nik' => Request()->nik,
            'nama_pegawai' => Request()->nama_pegawai,
            'golongan' => Request()->golongan,
            'tgl_lahir' => Request()->tgl_lahir,
            'tgl_pensiun' => Request()->tgl_pensiun,
            'jabatan' => Request()->jabatan,
            'divisi' => Request()->divisi,
            'area' => Request()->area,
        ];

        $this->PegawaiModel->editData($id_pegawai, $data);
        return redirect()->route('pegawai')->with('pesan', 'Data Berhasil Di Update !!');
    }
    public function delete($id_pegawai)
    {
        $this->PegawaiModel->deleteData($id_pegawai);  
        return redirect()->route('pegawai')->with('pesan', 'Data Berhasil Di Hapus !!'); 
    }
}
