<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
        'name'=>'admin',
        'email'=>'admin@gmil.com',
        'password'=>bcrypt('123123123'),
        'status'=>'active',
        'role'=>'admin'
        ],
        [
            'name'=>'vendor',
            'email'=>'vendor@gmil.com',
            'password'=>bcrypt('123123123'),
            'status'=>'active',
            'role'=>'vendor'
        ],
        [
            'name'=>'costumer',
            'email'=>'costumer@gmil.com',
            'password'=>bcrypt('123123123'),
            'status'=>'active',
            'role'=>'costumer'
        ],
    );
    }
}
