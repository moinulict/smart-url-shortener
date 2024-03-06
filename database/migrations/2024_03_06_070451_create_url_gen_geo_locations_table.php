<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlGenGeoLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_gen_geo_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('url_gens_id')->index(true);
            $table->unsignedBigInteger('url_gen_tracking_id')->index(true);
            $table->ipAddress('ip')->nullable();
            $table->string('version', 255)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('region', 255)->nullable();
            $table->string('region_code', 255)->nullable();
            $table->string('country_code', 255)->nullable();
            $table->string('country_code_iso3', 255)->nullable();
            $table->string('country_name', 255)->nullable();
            $table->string('country_capital', 255)->nullable();
            $table->string('country_tld', 255)->nullable();
            $table->string('continent_code', 255)->nullable();
            $table->boolean('in_eu')->nullable();
            $table->string('postal', 255)->nullable();
            $table->float('latitude', 8, 5)->nullable();
            $table->float('longitude', 8, 5)->nullable();
            $table->string('timezone', 255)->nullable();
            $table->string('utc_offset', 255)->nullable();
            $table->string('country_calling_code', 255)->nullable();
            $table->string('currency', 255)->nullable();
            $table->string('currency_name', 255)->nullable();
            $table->string('languages', 255)->nullable();
            $table->float('country_area')->nullable();
            $table->unsignedBigInteger('country_population')->nullable();
            $table->string('asn', 255)->nullable();
            $table->string('org', 255)->nullable();
            $table->string('hostname', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url_gen_geo_locations');
    }
}
