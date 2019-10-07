<?php

use Illuminate\Database\Seeder;

class HistoricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensores')->insert([
            'nome_sensor' => 'teste',
            'informacao'  => 12.2
        ]);

        DB::table('sensores')->insert([
            'nome_sensor' => 'testess',
            'informacao'  => 15.2
        ]);

        DB::table('sensores')->insert([
            'nome_sensor' => 'testrtrtrte',
            'informacao'  => 19.2
        ]);


    }
}
