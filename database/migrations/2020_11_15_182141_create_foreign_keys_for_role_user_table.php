<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('favoritos', function (Blueprint $table) {
            $table->foreign ('user_id')->references ('id')->on ('users')->onDelete ('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favoritos', function (Blueprint $table){
            $table->dropForeign ('favoritos_user_id_foreign');
        });
    }
}
