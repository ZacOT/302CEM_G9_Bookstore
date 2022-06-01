<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Carts Seeder Template
        DB::table('orders')->insert([
            'username'=>'admin',
            'address'=>'INTI Road Book Store 11900',
            'ISBN_13'=>'BS1001',
            'book_quantity'=>'2',
            'subtotal'=>'10',
        ]);
    }
}
