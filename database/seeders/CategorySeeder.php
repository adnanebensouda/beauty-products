<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create( [
            'id'=>1,
            'name'=>'beauty',
            'img'=>'assets/images/shop/category/4.webp',
            'bg_color'=>'#dcffd2',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        Category::create( [
            'id'=>2,
            'name'=>'cosmitic',
            'img'=>'assets/images/shop/category/1.webp',
            'bg_color'=>'#FFEDB4',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        Category::create( [
            'id'=>3,
            'name'=>'health',
            'img'=>'assets/images/shop/category/6.webp',
            'bg_color'=>'#DFE4FF',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        Category::create( [
            'id'=>4,
            'name'=>'makeup',
            'img'=>'assets/images/shop/category/3.webp',
            'bg_color'=>'#FFEACC',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
    }
}
