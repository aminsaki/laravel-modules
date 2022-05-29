<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('organization_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('national_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['female','man']);
            $table->timestamp('company_credit');
            $table->string('description');
            $table->string('address');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_country');
            $table->string('address_postal_code');
            $table->string('identification_code'); // code 32 bit
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('companys');
    }
}
