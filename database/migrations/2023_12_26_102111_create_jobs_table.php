<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->string('category', 100)->nullable();
            $table->string('type', 20)->nullable();
            $table->string('salary')->nullable();
            $table->decimal('min', 10, 2)->nullable();
            $table->decimal('max', 10, 2)->nullable();
            $table->string('document')->nullable(); 
            $table->string('experience', 20)->nullable();
            $table->string('location', 60)->nullable();
            $table->string('industry', 60)->nullable();
            $table->string('english_fluency', 20)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('country', 25)->nullable();
            $table->string('city', 25)->nullable();
            $table->string('state', 25)->nullable();
            $table->string('skills', 100);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
