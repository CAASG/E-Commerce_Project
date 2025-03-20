<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_elec = new Category();
        $category_elec->name = 'Electronics';
        $category_elec->description = 'Electronics category';
        $category_elec->save();

        $category_accessories = new Category();
        $category_accessories->name = 'Accessories';
        $category_accessories->description = 'Accessories category';
        $category_accessories->save();
    }
}
