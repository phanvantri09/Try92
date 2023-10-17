<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('img')->nullable();
            $table->longText('content')->nullable();
            $table->string('time_create')->nullable();
            $table->text('link_ytb')->nullable();
            $table->text('link_ytb_topic')->nullable();
            $table->text('link_zing')->nullable();
            $table->text('link_spotify')->nullable();
            $table->text('link_apple')->nullable();
            $table->text('link_NCT')->nullable();
            $table->text('link_tiktok')->nullable();
            $table->text('link_facebook')->nullable();
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
        Schema::dropIfExists('products');
    }
}
