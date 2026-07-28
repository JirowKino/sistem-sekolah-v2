<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }
    public function show($id)
    {
        return "Ini adalah halaman detail siswa dengan ID: " . $id;
    }
    public function create(){
        return "Ini adalah halaman form untuk menambahkan siswa baru";
    }
    public function store(Request $request){
        return "Menyimpan data siswa baru";
    }
    public function edit($id){
        return "Ini adalah halaman form untuk mengedit siswa dengan ID: " . $id;
    }
    public function update(Request $request, $id){
        return "Memperbarui data siswa dengan ID: " . $id;
    }
    public function destroy($id){
        return "Menghapus data siswa dengan ID: " . $id;
    }

    
}
