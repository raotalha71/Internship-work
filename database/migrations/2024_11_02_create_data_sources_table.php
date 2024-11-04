<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSourcesTable extends Migration
{
    public function up()
    {
        Schema::create('data_sources', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // e.g., database, API, file
            $table->text('connection_details'); // JSON or text for storing connection info
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_sources');
    }
}
