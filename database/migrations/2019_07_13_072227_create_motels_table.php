<?php

use App\Enums\MotelStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
            $table->increments('id');
            $table->text('motel_name');
            $table->text('slug');
            $table->text('image');
            $table->string('phone');
            $table->text('address');
            $table->string('location');
            $table->integer('district_id')->unsigned();
            $table->foreign('district_id')->references('id')->on('static_datas');
            $table->double('price')->default(0);
            $table->integer('total_room')->default(1);
            $table->integer('view')->default(0);
            $table->double('acreage')->default(0);
            $table->enum('status',MotelStatus::toArray());
            $table->text('description');
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
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
        Schema::dropIfExists('motels');
    }
}
