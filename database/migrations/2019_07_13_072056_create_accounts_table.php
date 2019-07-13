<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\Gender;
use App\Enums\UserRole;
use App\Enums\AccountStatus;
class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('full_name');
            $table->text('avatar');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->enum('gender',Gender::toArray());
            $table->date('birthday');
            $table->text('address');
            $table->enum('role',UserRole::toArray());
            $table->enum('status',AccountStatus::toArray());
            $table->string('provider');
            $table->string('provider_id')->unique();
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
        Schema::dropIfExists('accounts');
    }
}
