<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void 
    {
        // DB::table('guestbook')->insert([
        //     'name' => 'Andi',
        //     'from' => 'Cimahi',
        //     'agenda' => 'Tamu Khusus',
        // ]);
        \App\Models\Guestbook::factory(100)->create();
    }
}
