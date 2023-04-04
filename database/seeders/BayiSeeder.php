<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bayi')->insert([[
            'no_urut' => '348104567',
            'nama' => 'Faisal aji',
            'alamat' => 'Jl.xxx Malang',
            'tanggal_lahir' => '5 Maret 2000',
            'bb_lahir' => '3.8',
            'tb_lahir' => '48'
        ],[
            'no_urut' => '348104568',
            'nama' => 'Baskoro',
            'alamat' => 'Jl.yyy Malang',
            'tanggal_lahir' => '7 Agustus 2007',
            'bb_lahir' => '2.9',
            'tb_lahir' => '50'
        ],[
            'no_urut' => '348104569',
            'nama' => 'Monika',
            'alamat' => 'Jl.zzz Malang',
            'tanggal_lahir' => '7 Agustus 2007',
            'bb_lahir' => '3.0',
            'tb_lahir' => '51'
        ], [
            'no_urut' => '348104510',
            'nama' => 'Nur',
            'alamat' => 'Jl.xxx Malang',
            'tanggal_lahir' => '5 Mei 2001',
            'bb_lahir' => '3.3',
            'tb_lahir' => '42'
        ], [
            'no_urut' => '348104511',
            'nama' => 'Agus',
            'alamat' => 'Jl.yrrr Malang',
            'tanggal_lahir' => '3 Agustus 2002',
            'bb_lahir' => '2.9',
            'tb_lahir' => '50'
        ], [
            'no_urut' => '348104512',
            'nama' => 'doi',
            'alamat' => 'Jl.qqq Malang',
            'tanggal_lahir' => '2 Agustus 1999',
            'bb_lahir' => '2.3',
            'tb_lahir' => '44'
        ], [
            'no_urut' => '348104513',
            'nama' => 'Friska',
            'alamat' => 'Jl.Sutomo Bws',
            'tanggal_lahir' => '5 Januari 2000',
            'bb_lahir' => '3.3',
            'tb_lahir' => '47'
        ], [
            'no_urut' => '348104514',
            'nama' => 'Ical',
            'alamat' => 'Jl.sudarso Malang',
            'tanggal_lahir' => '5 Agustus 2005',
            'bb_lahir' => '2.6',
            'tb_lahir' => '55'
        ], [
            'no_urut' => '348104515',
            'nama' => 'Yuti',
            'alamat' => 'Jl.eadauz Malang',
            'tanggal_lahir' => '4 Agustus 2002',
            'bb_lahir' => '3.7',
            'tb_lahir' => '42'
        ], [
            'no_urut' => '348104516',
            'nama' => 'Rafi',
            'alamat' => 'Jl.sudarno Malang',
            'tanggal_lahir' => '5 Mei 2003',
            'bb_lahir' => '3.6',
            'tb_lahir' => '43'
        ], [
            'no_urut' => '348104517',
            'nama' => 'Sayuti',
            'alamat' => 'Jl.tenggarang Malang',
            'tanggal_lahir' => '3 April 2005',
            'bb_lahir' => '2.7',
            'tb_lahir' => '43'
        ], [
            'no_urut' => '348104518',
            'nama' => 'Kuri',
            'alamat' => 'Jl.London Malang',
            'tanggal_lahir' => '2 Agustus 1955',
            'bb_lahir' => '2.9',
            'tb_lahir' => '43'
        ],[
            'no_urut' => '348104519',
            'nama' => 'Rere',
            'alamat' => 'Jl.audwuiaw Malang',
            'tanggal_lahir' => '3 Desember 2003',
            'bb_lahir' => '2.7',
            'tb_lahir' => '45'
        ], [
            'no_urut' => '348104520',
            'nama' => 'Rusnandi',
            'alamat' => 'Jl.soekarno Malang',
            'tanggal_lahir' => '2 April 1989',
            'bb_lahir' => '2.6',
            'tb_lahir' => '54'
        ], [
            'no_urut' => '348104521',
            'nama' => 'Raden',
            'alamat' => 'Jl.Sutome Bws',
            'tanggal_lahir' => '6 Januari 2003',
            'bb_lahir' => '3.2',
            'tb_lahir' => '48'
        ], [
            'no_urut' => '348104522',
            'nama' => 'Abhel',
            'alamat' => 'Jl.sudumo Malang',
            'tanggal_lahir' => '5 Oktober 2008',
            'bb_lahir' => '2.4',
            'tb_lahir' => '39'
        ], [
            'no_urut' => '348104523',
            'nama' => 'Yofa',
            'alamat' => 'Jl.zeus Malang',
            'tanggal_lahir' => '4 Februari 2006',
            'bb_lahir' => '3.6',
            'tb_lahir' => '55'
        ], [
            'no_urut' => '348104524',
            'nama' => 'Arainal',
            'alamat' => 'Jl.sudarno Malang',
            'tanggal_lahir' => '19 Mei 2006',
            'bb_lahir' => '3.5',
            'tb_lahir' => '33'
        ], [
            'no_urut' => '348104525',
            'nama' => 'Muti',
            'alamat' => 'Jl.tanggerang Malang',
            'tanggal_lahir' => '3 April 2009',
            'bb_lahir' => '2.9',
            'tb_lahir' => '40'
        ], [
            'no_urut' => '348104526',
            'nama' => 'Roziq',
            'alamat' => 'Jl.Sutomo Malang',
            'tanggal_lahir' => '3 Agustus 2009',
            'bb_lahir' => '3.9',
            'tb_lahir' => '23'
        ]]);
    }
}
