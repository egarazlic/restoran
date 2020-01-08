<?php

use Illuminate\Database\Seeder;

class TipoviSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('tipovi_jela')->insert([
            'naziv' => "predjelo",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "glavno jelo",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "salate",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "deserti",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "kafa",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "caj",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "sokovi",
        ]);

        DB::table('tipovi_jela')->insert([
            'naziv' => "alkoholna pica",
        ]);
    }
}
