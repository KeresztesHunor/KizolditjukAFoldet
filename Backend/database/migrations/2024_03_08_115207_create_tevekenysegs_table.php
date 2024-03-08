<?php

use App\Models\Tevekenyseg;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
            $table->timestamps();
        });

        $tevekenysegek = [
            'kerékpárral jöttem iskolába',
            'rollerrel jöttem iskolába',
            '10 km-t gyalogoltam buszozás helyett',
            'ültettem fát',
            'ültettem virágot',
            'ültettem egyéb növényt',
            'kevesebb vizet használtam a fürdéshez',
            'összeszedtem a szemetet egy közterületen, erdőben, stb',
            'tartós szatyorba vásároltam, nem nylonba',
            'nem használtam egyszer használatos műanyagot',
            'tartós csomagolású terméket vásároltam – pl üvegbe vettem a tejet, nem használtam pet palackot, ',
            'környezetbarát csomagolású terméket vásároltam',
            'kevesebb húst ettem a héten',
            'ökológiai gazdaságból származó élelmiszert vettem',
            'kirándultam, szabadban töltöttem időt a héten',
            'kevesebb ruhát/terméket vásároltam a héten, hogy fenntarthatóbb legyen a környeztünk!',
            'önkénteskedtem a Greenpeace-nél, vagy más zöld szervezetnél'
        ];

        for ($i = 0; $i < count($tevekenysegek); $i++)
        {
            Tevekenyseg::create([
                'tevekenyseg_nev' => $tevekenysegek[$i],
                'pontszam' => random_int(1, 7)
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
