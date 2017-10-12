<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('shortTitle', 255);
            $table->text('description');
        });

        $manga = [['title' => 'Bleach', 'shortTitle' => 'bleach', 'description' => ''], ['title' => 'Boruto', 'shortTitle' => 'boruto','description' => ''],
                ['title' => 'Dragon ball super', 'shortTitle' => 'dbs', 'description' => ''], ['title' => 'Gantz', 'shortTitle' => 'gantz', 'description' => ''],
                ['title' => 'Gintama', 'shortTitle' => 'gintama', 'description' => ''], ['title' => 'Hunter X Hunter', 'shortTitle' => 'hxh', 'description' => ''],
                ['title' => 'Naruto', 'shortTitle' => 'naruto', 'description' => ''], ['title' => 'One piece', 'shortTitle' => 'onepiece', 'description' => '']];
        DB::table('mangas')->insert(
            $manga
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
}
