<?php

namespace Database\Seeders;

use App\Models\Scent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScentSeeder extends Seeder
{
    public function run(): void
    {
        $scents = [
            'Signature Scents',
            'Niche Scents',
            'Original Scents',
        ];

        foreach ($scents as $scent) {
            Scent::create([
                'name' => $scent,
                'slug' => Str::slug($scent),
            ]);
        }
    }
}
