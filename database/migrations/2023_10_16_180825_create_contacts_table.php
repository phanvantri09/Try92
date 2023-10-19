<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->text('numberPhone')->nullable();
            $table->text('address')->nullable();
            $table->text('link_ytb')->nullable();
            $table->text('link_ytb_topic')->nullable();
            $table->text('link_zing')->nullable();
            $table->text('link_spotify')->nullable();
            $table->text('link_apple')->nullable();
            $table->text('link_NCT')->nullable();
            $table->text('link_tiktok')->nullable();
            $table->text('link_facebook')->nullable();
            $table->integer('status')->default(111)->comment('111 là admin, 222 là quản lí');
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
        Schema::dropIfExists('contacts');
    }
}
