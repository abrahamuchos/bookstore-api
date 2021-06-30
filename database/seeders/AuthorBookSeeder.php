<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds. Genra 2 libro rando m para cada autor
     * es posible que agregue el mismo para un mism autor. vuelve a correr el seed
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 5; $i++){
            for( $j=1; $j <= 2; $j++){
                DB::table('author_book')->insert([
                    'author_id' => $i,
                    'book_id' => rand(1,5)
                ]);
            }
        }
       
    }
}
