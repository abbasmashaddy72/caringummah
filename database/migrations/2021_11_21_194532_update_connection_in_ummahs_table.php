<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateConnectionInUmmahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ummahs', function (Blueprint $table) {
            $table->dropColumn('connected_with');
            $table->dropColumn('connected_where');
            $table->foreignId('connection_id')->after('locality_id')->constrained('connections')->onUpdate('cascade')->onDelete('cascade');
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
            $table->enum('connected_with', ['Masjid', 'Madarsa', 'School']);
            $table->string('connected_where')->after('connected_with');
            $table->dropColumn('connection_id');
        });
    }
}
