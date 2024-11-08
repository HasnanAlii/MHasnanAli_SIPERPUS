<?php

namespace Database\Seeders;

use App\Models\permission;
use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        role::create(['name' => 'admin']);
        permission::create(['name'=> 'kelola_akun']);
        //pustakawan
        role::create(['name' => 'pustakawan']);
        permission::create(['name'=> 'kelola_buku']);
        permission::create(['name'=> 'kelola_peminjaman']);
        permission::create(['name'=> 'kelola_pengembalian']);


        //member
        role::create(['name' => 'member']);
        permission::create(['name'=> 'lihat_buku']);
        permission::create(['name'=> 'pinjam_buku']);



    }
}
