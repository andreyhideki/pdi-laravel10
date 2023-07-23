<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->delete();

        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();

        DB::table('products')->insert([
            'nome' => 'produto 1', 
            'preco' => '1', 
            'quantidade' => '1', 
            'description' => 'produto 1 description',
            'created_at' => $dateNow,
            'updated_at' => $dateNow,
        ]);

        for ($i=2; $i <= 10; $i++) { 
            Product::create(array(
                'nome' => 'produto '.$i, 
                'preco' => $i, 
                'quantidade' => $i, 
                'description' => 'produto '.$i.' description',
                'created_at' => $dateNow,
                'updated_at' => $dateNow, 
            ));

        }    
    }
}
