<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $categories =    [
                [    'id'=>1,'category_name'=>'Kids'
                ],
                [
                    'id'=>2,'category_name'=>'Men'
                ],
                [
                    'id'=>3,'category_name'=>'Women'
                ]            
            ];

            foreach($categories as $category){
                Category::create($category);
            }
    }
}
