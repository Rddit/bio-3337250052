<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index() 
    {
        $mahasiswa = [
            'nama'      => 'Raditya Ahmad Pratama',
            'nim'       => '3337250052',
            'prodi'     => 'Informatika',
            'angkatan'  => '2025',
            'ipk'       => '4.00',
            'email'     => 'radityapone@gmail.com',
            'github'    => 'https://github.com/Rddit',
            'skill'     => ['Networking', 'Python', 'C++', 'HTML', 'CSS', 'Javascript'],
            'bio'       => 'Mahasiswa Informatika UNTIRTA yang semangat belajar.',
        ];

        return view('profil', compact('mahasiswa'));
    }
}
