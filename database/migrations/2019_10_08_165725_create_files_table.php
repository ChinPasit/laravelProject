<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id')->unsigned()->index();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('overview');
            $table->string('categories');
            //$table->decimal('price', 6, 2);
            $table->date('publish');
            $table->string('file_name',200)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
