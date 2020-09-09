<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->default('https://via.placeholder.com/150x150');
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('role_id')->default(3);
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
//            $table->foreignId('role_id')->default(3)->constrained()->onDelete('cascade');
            $table->string('password');
            $table->unsignedBigInteger('plan_id')->default(null)->nullable();
            $table->string('stripe_price_id')->nullable();
            $table->string('paypal_subscription_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
