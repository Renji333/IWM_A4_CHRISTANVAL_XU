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
            $table->integer('nbPages');
            $table->integer('manga_id')->unsigned();
            $table->foreign('manga_id')->references('id')->on('mangas');

        });

        $tomes = [
            ['chapter' => 685, 'manga_id' => 1,'nbPages' => 24],
            ['chapter' => 686, 'manga_id' => 1,'nbPages' => 31],
            ['chapter' => 15, 'manga_id' => 2,'nbPages' => 49],
            ['chapter' => 16, 'manga_id' => 2,'nbPages' => 45],
            ['chapter' => 27, 'manga_id' => 3,'nbPages' => 46],
            ['chapter' => 28, 'manga_id' => 3,'nbPages' => 45],
            ['chapter' => 382, 'manga_id' => 4,'nbPages' => 26],
            ['chapter' => 383, 'manga_id' => 4,'nbPages' => 32],
            ['chapter' => 653, 'manga_id' => 5,'nbPages' => 21],
            ['chapter' => 654, 'manga_id' => 5,'nbPages' => 21],
            ['chapter' => 369, 'manga_id' => 6,'nbPages' => 30],
            ['chapter' => 370, 'manga_id' => 6,'nbPages' => 19],
            ['chapter' => 699, 'manga_id' => 7,'nbPages' => 33],
            ['chapter' => 700, 'manga_id' => 7,'nbPages' => 32],
            ['chapter' => 879, 'manga_id' => 8,'nbPages' => 28],
            ['chapter' => 880, 'manga_id' => 8,'nbPages' => 27]
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
