<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPagesForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            // $table->unsignedBigInteger('user_id')->change(); // Type moet hetzelfde zijn als de key waar naartoe gewezen wordt.

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            // $table->dropForeign('pages_user_id_foreign');

            // $table->integer('user_id')->change(); // Type moet natuurlijk weer terug naar wat het was
        });
    }
}
