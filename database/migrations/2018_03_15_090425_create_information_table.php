<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('sign')->commen('个性签名');
            $table->string('name')->commen('昵称');
            $table->string('avatar');
            $table->unsignedTinyInteger('sex')->default(2)->comment('性别 1-男 2-女');
            $table->string('birthday')->nullable()->comment('生日');
            $table->string('vocation')->nullable()->comment('职业');
            $table->string('company')->nullable()->comment('公司');
            $table->string('school')->nullable()->comment('学校');
            $table->string('location')->nullable()->comment('所在地');
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
        Schema::dropIfExists('information');
    }
}
