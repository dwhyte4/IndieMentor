<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Plan;

class AddFieldToTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('templates', function (Blueprint $table) {
            //
            $table->string('name');
            $table->integer('price');
            $table->string('description');
            $table->foreignIdFor(Plan::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('templates', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('price');
            $table->dropColumn('price');
            $table->dropColumn('description');
            $table->dropColumn('plan_id');
        });
    }
}
