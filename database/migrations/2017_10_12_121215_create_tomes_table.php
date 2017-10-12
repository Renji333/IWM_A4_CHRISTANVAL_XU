<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chapter');
            $table->integer('manga_id')->unsigned();
            $table->foreign('manga_id')->references('id')->on('mangas');

        });

        $tomes = [
            ['chapter' => 685, 'manga_id' => 1],
            ['chapter' => 686, 'manga_id' => 1],
            ['chapter' => 15, 'manga_id' => 2],
            ['chapter' => 16, 'manga_id' => 2],
            ['chapter' => 27, 'manga_id' => 3],
            ['chapter' => 28, 'manga_id' => 3],
            ['chapter' => 382, 'manga_id' => 4],
            ['chapter' => 383, 'manga_id' => 4],
            ['chapter' => 653, 'manga_id' => 5],
            ['chapter' => 654, 'manga_id' => 5],
            ['chapter' => 369, 'manga_id' => 6],
            ['chapter' => 370, 'manga_id' => 6],
            ['chapter' => 699, 'manga_id' => 7],
            ['chapter' => 700, 'manga_id' => 7],
            ['chapter' => 879, 'manga_id' => 8],
            ['chapter' => 880, 'manga_id' => 8]
        ];

        DB::table('tomes')->insert(
            $tomes
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('tomes', function (Blueprint $table) {
            $table->dropForeign(['manga_id']);
            $table->dropColumn('manga_id');
        });

        Schema::dropIfExists('tomes');
    }
}
