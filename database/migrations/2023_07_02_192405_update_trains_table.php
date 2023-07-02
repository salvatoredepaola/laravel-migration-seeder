<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            // $table->dropColumn("Azienda")
            $table->string("Stazione_di_partenza", 100);
            $table->string("Stazione_di_arrivo", 100);
            $table->integer("Orario_di_partenza");
            $table->integer("Orario_di_arrivo");
            $table->integer("Codice_Treno");
            $table->integer("Numero_Carrozze")->nullable();
            $table->string("In_orario", 20);
            $table->string("Cancellato", 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn(
                [
                    "Stazione_di_partenza",
                    "Stazione_di_arrivo",
                    "Orario_di_partenza",
                    "orario_di_arrivo",
                    "Codice_Treno",
                    "numero_Carrozze",
                    "In_orario",
                    "Cancellato"
                ]
                );
            // $table->string("Azienda");
        });
    }
};
