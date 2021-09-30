<?php
$mahasiswa = [
    'nama' => 'Mega Nirmala',
    'umur' => '20 tahun',
    'jenis_kelamin' => 'Perempuan',
    'alamat' => 'Jl. Cendrawasih Raya no 5',
    'no_telepon' => '081098234578',
    'program_studi' => [
        'sarjana' => [
            'fakultas_ilmu_dan_teknologi' => 'Meteorologi',
            'fakultas_teknologi_industri' => 'Teknik Industri'
            ],
        'magister' => [
            'fakultas_ilmu_dan_teknologi_kebumian' => 'Sains Kebumian',
            'fakultas_teknik_sipil_dan_lingkunagn' => 'Teknik Sipil',
            ]
        ]
    ];

//konversi dari array ke object
$mahasiswa = (object)$mahasiswa;
$mahasiswa->program_studi = (object)$mahasiswa->program_studi;
$mahasiswa->program_studi->sarjana = (object)$mahasiswa->program_studi->sarjana;
$mahasiswa->program_studi->magister = (object)$mahasiswa->program_studi->magister;

//menampilkan object
echo "Nama : {$mahasiswa->nama} <br>";
echo "Umur : {$mahasiswa->umur} <br>";
echo "Jenis Kelamin : {$mahasiswa->jenis_kelamin} <br>";
echo "Alamat : {$mahasiswa->alamat} <br>";
echo "No Telepon : {$mahasiswa->no_telepon} <br>";
echo "Program Studi : {$mahasiswa->program_studi->sarjana->fakultas_ilmu_dan_teknologi} <br>";
echo "==============================================";

    echo "<pre>";
    print_r($mahasiswa);
    echo "<pre>";

?>