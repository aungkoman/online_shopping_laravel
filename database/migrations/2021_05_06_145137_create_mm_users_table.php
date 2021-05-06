<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMmUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mm_users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->datetime('phone_no_verified_at')->nullable();
            $table->integer('role_id')->nullable(); // role စနစ်က သုံးချင်မှ သုံးမှာ ဆိုတော့ ၊ အပေါ်က email, phone တွေလည်း အတူတူပါပဲ၊ တကယ်လိုတာက username and password
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
        Schema::dropIfExists('mm_users');
    }
}
