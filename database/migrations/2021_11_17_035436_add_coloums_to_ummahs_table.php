<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumsToUmmahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ummahs', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('family_members');
            $table->string('connected_where')->after('connected_with');
            $table->date('date_of_birth')->after('name')->nullable();
            $table->string('location')->after('occupation');
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
            $table->dropColumn('connected_where');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('location');
            $table->dropColumn('photo');
        });
    }
}
