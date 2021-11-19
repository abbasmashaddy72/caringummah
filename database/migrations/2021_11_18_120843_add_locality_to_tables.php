<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalityToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ummahs', function (Blueprint $table) {
            $table->foreignId('locality_id')->after('phone')->constrained('localities')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->foreignId('locality_id')->after('phone')->constrained('localities')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->foreignId('locality_id')->after('phone')->constrained('localities')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ummahs', function (Blueprint $table) {
            $table->dropColumn('locality_id');
        });
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('locality_id');
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('locality_id');
        });
    }
}
