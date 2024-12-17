<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJenisKelaminToDetailPenghuni extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_penghuni', function (Blueprint $table) {
            $table->string('jenis_kelamin', 20)->nullable()->after('tgllhr');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_penghuni', function (Blueprint $table) {
            $table->dropColumn('jenis_kelamin');
        });
    }
}
