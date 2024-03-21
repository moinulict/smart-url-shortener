<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddDateTimeToUrlGenGeoLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('url_gen_geo_locations', function (Blueprint $table) {
            $table->dateTime('date_time')->default(DB::raw('CURRENT_TIMESTAMP'))->index()->after('url_gen_tracking_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('url_gen_geo_locations', function (Blueprint $table) {
            //
        });
    }
}
