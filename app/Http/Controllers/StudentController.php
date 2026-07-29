<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = [
            [
                'id' => 1, 
                'name' => 'sugA', 
                'class' => '12 TKJ 3',
                'major' => 'TKJ',
                'nis' => '2204001',
            ], 
            [
                'id' => 2, 
                'name' => 'gnawkA', 
                'class' => '12 AKL 1',
                'major' => 'AKL',
                'nis' => '2204002',
            ],
            [
                'id' => 3, 
                'name' => 'imuS', 
                'class' => '12 BID',
                'major' => 'BID',
                'nis' => '2204003'
            ],
        ];

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }
    
    public function show($id)
    {
        $title = "Sistem Sekolah - Lembar Siswa";

        return view('students.show', [
            'title' => $title
        ]);
    }

    public function create(){
        $title = "Sistem Sekolah - Catat Siswa Baru";

        return view('students.create', [
            'title' => $title
            ]);
    }

     public function edit($id){
        $title = "Sistem Sekolah - Ubah Data Siswa";
        
        return view('students.edit', [
            'title' => $title
        ]);
    }

    public function store(Request $request){
        return "Menyimpan data siswa baru";
    }
  
    public function update(Request $request, $id){
        return "Memperbarui data siswa dengan ID: " . $id;
    }
    public function destroy($id){
        return "Menghapus data siswa dengan ID: " . $id;
    }

    
}
