<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\DB;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            ['name'=>'Gafas',
            'precio'=>'34',
            'descripcion'=>'color rouse wold'
        ]);
        DB::table('products')->insert([
            'name'=>'T.shirt',
            'precio'=>'55',
            'descripcion'=>'color rojo '
        ]);
       //$products=factory(App\products::class,20)->create();
    }
}
