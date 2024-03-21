<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUrlGenGeoLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('url_gen_geo_locations', function (Blueprint $table) {
            $table->string('continent', 255)->nullable()->after('continent_code');
            $table->string('isp', 255)->nullable()->after('timezone');
            $table->string('isp_organization', 255)->nullable()->after('isp');
            $table->dropColumn('version');
            $table->dropColumn('country_code_iso3');
            $table->dropColumn('country_capital');
            $table->dropColumn('country_tld');
            $table->dropColumn('in_eu');
            $table->dropColumn('utc_offset');
            $table->dropColumn('country_calling_code');
            $table->dropColumn('currency');
            $table->dropColumn('currency_name');
            $table->dropColumn('languages');
            $table->dropColumn('country_area');
            $table->dropColumn('country_population');
            $table->dropColumn('asn');
            $table->dropColumn('org');
            $table->dropColumn('hostname');
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
        });
    }
}
