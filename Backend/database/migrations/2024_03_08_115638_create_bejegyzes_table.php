<?php

use App\Models\Bejegyzes;
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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->string('osztaly_id');
            $table->boolean('allapot');
            $table->timestamps();
        });

        Bejegyzes::create([
            'tevekenyseg_id' => 3,
            'osztaly_id' => '12a',
            'allapot' => false
        ]);
        Bejegyzes::create([
            'tevekenyseg_id' => 5,
            'osztaly_id' => '12b',
            'allapot' => true
        ]);
        Bejegyzes::create([
            'tevekenyseg_id' => 7,
            'osztaly_id' => '11c',
            'allapot' => false
        ]);
        Bejegyzes::create([
            'tevekenyseg_id' => 1,
            'osztaly_id' => '10a',
            'allapot' => true
        ]);
        Bejegyzes::create([
            'tevekenyseg_id' => 6,
            'osztaly_id' => '12a',
            'allapot' => false
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
