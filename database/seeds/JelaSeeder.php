<?php

use Illuminate\Database\Seeder;

class JelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->integer('tip_jela');
        //            $table->string('naziv');
        //            $table->integer('cijena');
        //            $table->string('slika');
        //            $table->string('opis');
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Pileca Supa",
            'cijena' => 3,
            'slika' => "78967961_431961091064361_6365554330568753152_n",
            'opis' => "Domaca supa sa komadicima piletine, uz dodatke persina i mrkve.",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Govedja supa",
            'cijena' => 3,
            'slika' => "82080992_1203769526493271_8998655946313957376_n",
            'opis' => "Domaca supa sa komadicima govedjeg mesa sa okruglicama od hljeba",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Begova Corba",
            'cijena' => 4,
            'slika' => "79329101_480046605952624_5995937579743051776_n",
            'opis' => "Domaca supa sa bamijama i gljivama, te persunom i mrkvom",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Supa od gljiva",
            'cijena' => 4,
            'slika' => "78571659_755578098244830_3842729530611466240_n",
            'opis' => "Domaca supa od gljiva sa komadicima sampinjona i vrganjima.",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Hladna Plata",
            'cijena' => 8,
            'slika' => "81262232_595370027693240_7970187802077822976_n",
            'opis' => "Hladna plata od domaćeg suhog mesa, bosanskog sudžuka, sira edamera, picolo paradajza i maslina",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Slane Tortice",
            'cijena' => 4,
            'slika' => "81224690_801880416952680_2819583344776314880_n",
            'opis' => "Slani mafini ispunjeni feta sirom,picolo paradajzom, mladim lukom i orasima.",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "1",
            'naziv' => "Vertigo rols",
            'cijena' => 4,
            'slika' => "82382018_465422847745030_8594413774738292736_n",
            'opis' => "Ukusne kriške tortilje sa sirnim namazom, paprikom i sirom uz dodatke peršina i mrkve.",
        ]);

        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Jagnjetina",
            'cijena' => 12,
            'slika' => "78633641_443525719870650_3453030290098749440_n",
            'opis' => "Svježa domaća jagnjetina sa ražnja.",
        ]);

        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Musaka",
            'cijena' => 5,
            'slika' => "79404946_449944945669401_7202208930422849536_n",
            'opis' => "Musaka sa više slojeva tanko narezanog krompira između kojih je kombinacija faširanog mesa i jaja.",
        ]);
        DB::table('jelo')->insert([
        'tip_jela' => "2",
        'naziv' => "Sarma",
        'cijena' => 6,
        'slika' => "78494340_618235928916636_467385762854207488_n",
        'opis' => "Domaća sarma od goveđeg faširanog mesa umotanog u listove kiselog kupusa uz dodatak pire krompira.",
    ]);
        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Punjene paprike",
            'cijena' => 5,
            'slika' => "81733465_2471354286435932_4279070372202020864_n",
            'opis' => "Sočne paprike punjene faširanim goveđim mesom.",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Grah sa mesome",
            'cijena' => 4,
            'slika' => "81601760_622936048247856_4833513915260338176_n",
            'opis' => "Hladna plata od domaćeg suhog mesa, bosanskog sudžuka, sira edamera, picolo paradajza i maslina.",
        ]);
        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Buranija",
            'cijena' => 4,
            'slika' => "81325837_1420002421492986_8239054197916434432_n",
            'opis' => "Domaće varivo sa buranijom, komadima goveđeg mesa i mrkve.",
        ]);


        DB::table('jelo')->insert([
            'tip_jela' => "2",
            'naziv' => "Bosanski lonac",
            'cijena' => 4,
            'slika' => "82013005_447770176130738_2391612041530966016_n",
            'opis' => "Domaće varivo sa goveđim mesom, komadima krompira, tikvice, graškom i crvenim lukom.",
        ]);


 	    DB::table('jelo')->insert([
        'tip_jela'=>'3',
        'naziv'=>'Ruska salata',
        'cijena'=>4,
        'slika'=>'',
        'opis'=>'Ruska salata po autentičnom receptu iz Sant Petersburga.',
        ]);

        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Krompir salata',
        'cijena'=>3,
        'slika'=>'',
        'opis'=>'Salata od krompira i crvenog luka.',
        ]);

        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Kupus salata',
        'cijena'=>2,
        'slika'=>'',
        'opis'=>'Domaća kupus salata od svježe naribanog kupusa sa dodatkom mrkve, ulja i soli.',
        ]);

        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Francuska salata',
        'cijena'=>4,
        'slika'=>'',
        'opis'=>'Sočne salata od graška, mrkve, krompira i jaja.',
        ]);
        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Meksička salata',
        'cijena'=>4,
        'slika'=>'',
        'opis'=>'Salata od paprike, mahuna, kukuruza, graha i mrkve.',
        ]);

        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Bulgur salata',
        'cijena'=>3,
        'slika'=>'',
        'opis'=>'Domaće salata sa paprikom, feta sirom, rižom, paradajzom, krastavcem i ljubičastim lukom.',
        ]);
        DB::table('jelo')->insert([
        'tip_jela'=>'3',
    'naziv'=>'Turska salata',
        'cijena'=>2,
        'slika'=>'',
        'opis'=>'Salata sa paradajzom, paprikom, krastavcem i mladim lukom.',
            ]);
    }
}
