<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_pegawai')->get();
    }
    public function detailData($id_pegawai)
    {
        return DB::table('tbl_pegawai')->where('id_pegawai', $id_pegawai)->first();
    }
    public function addData($data)
    {
        DB::table('tbl_pegawai')->insert($data);
    }
    public function editData($id_pegawai, $data)
    {
        DB::table('tbl_pegawai')->where('id_pegawai', $id_pegawai)->update($data);
    }
    public function deleteData($id_pegawai)
    {
        DB::table('tbl_pegawai')->where('id_pegawai', $id_pegawai)->delete();
    }
}
