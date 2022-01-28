<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bard;
class BardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 11; $i++){
            bard::create([
                'name'=>'Sonono',
                'type' => 'beard',
                'email' => 'berd@gmail.com'
            ]);
        }
    }
}