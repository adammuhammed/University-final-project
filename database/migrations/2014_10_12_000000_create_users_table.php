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
            $table->string('name')->nullable();
            $table->string('arabic_name')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('country')->nullable();
            $table->string('arabic_country')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->date('date_of_graduation')->nullable();
            $table->string('gender')->nullable();
            $table->string('type_of_study')->nullable();
            $table->string('branch')->nullable();
            $table->string('arabic_branch')->nullable();
            $table->string('origin')->nullable();
            $table->string('arabic_origin')->nullable();
            $table->string('department')->nullable();
            $table->string('arabic_department')->nullable();
            $table->string("image")->nullable();
            $table->string('email')->unique();
            $table->string('username', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->boolean('isManager')->default(true);
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
