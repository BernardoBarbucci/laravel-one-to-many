<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            $table->unsignedBigInteger('group_id')->after('id');

            // creo un nuovo vincolo di chiave esterna su questa tabella ->
            // nella colonna 'group_id' che fa riferimento alla colonna 'id' nella tabella 'users' 
            $table->foreign('group_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {

            // prima droppo il vincolo di chiave esterna e poi la colonna, se faccio il contrario non va!
            $table->dropForeign('projects_group_id_foreign');

            $table->dropColumn('group_id');
        });
    }
};
