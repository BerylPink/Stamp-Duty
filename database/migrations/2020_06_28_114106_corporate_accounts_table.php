<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorporateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporate_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->index();
            $table->unsignedBigInteger('states_id')->index();
            $table->unsignedBigInteger('account_credentials_id')->index();
            $table->unsignedBigInteger('contact_persons_id')->index();
            $table->string('institution_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_no', '11')->unique();
            $table->text('address');
            $table->string('tin_number')->unique();
            $table->string('CAC_registration_number')->unique();
            $table->date('date_of_incorporation')->unique();
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
        Schema::dropIfExists('corporate_accounts');
    }
}
