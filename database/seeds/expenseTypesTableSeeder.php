<?php

use Illuminate\Database\Seeder;

class expenseTypesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
//        DB::table('expense_types')->insert([
//            'expenseName' => 'Telephone Bill',
//            'description' => 'Telephone bill payment',
//        ]);
        
        factory(App\expenseType::class, 5)->create();
    }

}
