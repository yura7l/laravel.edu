<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(true);
            $table->dateTime('active_from')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('name');
            $table->text('preview_text')->nullable();
            $table->longText('detail_text')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('detail_image')->nullable();
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
        Schema::dropIfExists('news');
    }
}
