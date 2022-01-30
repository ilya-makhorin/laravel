<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_category', function (Blueprint $table) {
            $table->id();
            $table->string('id_name',50)
                ->unique()
                ->nullable(false)
                ->comment('id котегории');
            $table->string('title',50)
                ->unique()
                ->nullable(false)
                ->comment('Название котегории');
        });
        Schema::create('news_source', function (Blueprint $table) {
            $table->id();
            $table->string('source',50)
                ->nullable(false)
                ->comment('Ресурс');
        });
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title',50)
                ->unique()
                ->nullable(false)
                ->comment('Название котегории');
            $table->text('content')
                ->nullable(false)
                ->comment('Текст новости');
        });
        Schema::create('news_status', function (Blueprint $table) {
            $table->id();
            $table->string('status',50)
                ->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
