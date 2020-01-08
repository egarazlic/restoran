<?php

use Illuminate\Database\Seeder;

class JelaSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

 	    DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Baklava',
        'cijena'=>3,
        'slika'=>'76751610_2462397000744199_3905844560357490688_n',
        'opis'=>'Domaća bosanska baklava.',]);

        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Tufahija',
        'cijena'=>4,
        'slika'=>'78925864_486691571967833_2261000007295434752_n',
        'opis'=>'Tufahija od jabuka punjenih orasima i šlagom.',]);

        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Čokoladna torta',
        'cijena'=>4,
        'slika'=>'81481917_511302716406400_2195737558325919744_n',
        'opis'=>'Sočna torta sa 3 vrte čokolade.',]);


        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Oblatna',
        'cijena'=>2,
        'slika'=>'82150239_532745683993401_2093297387110924288_n',
        'opis'=>'Oblatna sa punjenjem mixa karamele, čokolade i oraha.',]);

        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Sladoled jagoda',
        'cijena'=>2,
        'slika'=>'81376069_1257101361148924_7774116304427941888_n',
        'opis'=>'Sladoled sa ukusom jagode.',]);


        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Sladoled vanilija',
        'cijena'=>2,
        'slika'=>'82087151_1063189310687119_7230678688080068608_n',
        'opis'=>'Sladoled sa ukusom vanilije.',]);

        DB::table('jelo')->insert([
        'tip_jela'=>'4',
        'naziv'=>'Sladoled čokolada',
        'cijena'=>2,
        'slika'=>'78924735_462584804443465_5683126053489344512_n',
        'opis'=>'Sladoled sa ukusom čokolade.',]);

        DB::table('jelo')->insert([
 	        'tip_jela'=>'5',
        'naziv'=>'Turska kafa',
        'cijena'=>2,
        'slika'=>'kafa',
        'opis'=>'Domaća Vispak kafa uz lokum.']);

        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Esspreso kafa',
        'cijena'=>2,
        'slika'=>'81193660_2837059266332699_6722799625666822144_n',
        'opis'=>'Franck esspresso kafa.']);

        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Ledena kafa',
        'cijena'=>3,
        'slika'=>'78981227_742306596269815_2215767391713886208_n',
        'opis'=>'Nesscafe ice coffe.']);

        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Latte',
        'cijena'=>3,
        'slika'=>'srcadkafa',
        'opis'=>'Caffe latte sa gustom kremom od mlijeka na površini.']);

        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Mochacino',
        'cijena'=>3,
        'slika'=>'drugakafa',
        'opis'=>'Caffe latte sa kašikom čokolade na dnu šoljice.']);


        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Cappucino',
        'cijena'=>2,
        'slika'=>'80679198_2585090285141300_4290196175744663552_n',
        'opis'=>'Espreso kafa sa vrelom mliječnom pjenom, posuto kakao prahom.']);

        DB::table('jelo')->insert([
        'tip_jela'=>'5',
    'naziv'=>'Konsul',
        'cijena'=>2,
        'slika'=>'konsul',
        'opis'=>'Konsul je kafa sa malo tečne slatke pavlake.']);


 	DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Čaj od kamilice',
        'cijena'=>2,
        'slika'=>'78588680_736030310226859_1270880668267577344_n',
        'opis'=>'Čaj od kamilice.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Nana/menta',
        'cijena'=>2,
        'slika'=>'menta',
        'opis'=>'Čaj od listova pitome nane.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Šipkov čaj',
        'cijena'=>2,
        'slika'=>'sipak',
        'opis'=>'Čaj od šipka.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Lipov čaj',
        'cijena'=>2,
        'slika'=>'lipa',
        'opis'=>'Čaj od cvijeta lipe.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Majčina dušica',
        'cijena'=>2,
        'slika'=>'dusica',
        'opis'=>'Caj od trave majčina dušica.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Zeleni čaj',
        'cijena'=>2,
        'slika'=>'zeleni',
        'opis'=>'Zeleni čaj Lung Ching.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'6',
        'naziv'=>'Bronhi čaj',
        'cijena'=>2,
        'slika'=>'bronhi',
        'opis'=>'Čaj od kombinacije mlijeka i bronhi bombona.',]);
 	DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Coca cola',
        'cijena'=>2,
        'slika'=>'cola',
        'opis'=>'Coca cola 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Fanta',
        'cijena'=>2,
        'slika'=>'fanta',
        'opis'=>'Fanta 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Sprite',
        'cijena'=>2,
        'slika'=>'sprite',
        'opis'=>'Sprite 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Breskva',
        'cijena'=>2,
        'slika'=>'breskva',
        'opis'=>'Gusti sok od breskve.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Jagoda',
        'cijena'=>2,
        'slika'=>'jagoda',
        'opis'=>'Gusti sok od jagode.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Jabuka',
        'cijena'=>2,
        'slika'=>'jabuka',
        'opis'=>'Bistri sok od jabuke.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'7',
        'naziv'=>'Nar',
        'cijena'=>3,
        'slika'=>'nar',
        'opis'=>'Cijeđeni sok od nara.',]);
 	DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Sarajevsko pivo',
        'cijena'=>2,
        'slika'=>'sarajevsko',
        'opis'=>'Sarajevsko pivo 0,33l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Preminger',
        'cijena'=>2,
        'slika'=>'preminger',
        'opis'=>'Preminger pivo 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Crno vino',
        'cijena'=>3,
        'slika'=>'cvino',
        'opis'=>'Crno vino Blatina 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Bijelo vino',
        'cijena'=>3,
        'slika'=>'bvino',
        'opis'=>'Bijelo vino Hepok 0,25l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Viski',
        'cijena'=>4,
        'slika'=>'viski',
        'opis'=>'Jack Daniels 0,05l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Rakija-šljivovica',
        'cijena'=>3,
        'slika'=>'sljiva',
        'opis'=>'Domaća šljivovica 0,05l.',]);
    DB::table('jelo')->insert([
        'tip_jela'=>'8',
        'naziv'=>'Rakija-kruška',
        'cijena'=>3,
        'slika'=>'kruska',
        'opis'=>'Domaća kruška 0,05l.',]);
    }
}
