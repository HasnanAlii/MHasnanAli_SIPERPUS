<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {

        $pustakawan = user::create([
            'username' => 'pustakawan',
            'name' => 'pustakawan',
            'email' => 'pustakawan@gmail.com',
            'password' => Hash::make('password123'),
            
        ]);
        $pustakawan->assignRole('pustakawan');
        $pustakawan->givePermissionTo('kelola_buku');
        $pustakawan->givePermissionTo('kelola_peminjaman');
        $pustakawan->givePermissionTo('kelola_pengembalian');


        $mahasiswa = user::create([
            'username' => 'mahasiswa',
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('password123'),
    
        ]);
        $mahasiswa->assignRole('member');
        $mahasiswa->givePermissionTo('lihat_buku');
        $mahasiswa->givePermissionTo('pinjam_buku');

      
        // user::create([
        //     'username' => 'Admin',
        //     'name' => 'hasnan',
        //     'email' => 'hasnan@gmail.com',
        //     'password' => Hash::make('password123'),
        //     'email_verified_at' => now(),
        // ]);
    }
}
