<?php

namespace Database\Seeders;

use App\Models\Lang;
use Illuminate\Database\Seeder;

class langSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lang = ['PHP', 'HTML', "CSS", "javascript", 'SQL', 'plaintext'];
        foreach ($lang as $key) {
            Lang::insert([
                'lang' => $key,
            ]);
        }
    }
}
