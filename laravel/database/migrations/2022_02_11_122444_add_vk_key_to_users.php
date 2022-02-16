<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVkKeyToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_in_soc',20)
                ->default('')
                ->comment('id in vk');
            $table->enum('type_auth',['site','vk','fb'])
                ->default('site')
                ->comment('type auth');
            $table->string('avatar',150)
                ->default('site')
                ->comment('ссылка на аватар');
            $table->index('id_in_soc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['id_in_soc','type_auth','avatar']);
        });
    }
}
