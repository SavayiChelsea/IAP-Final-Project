<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cartype')->nullable();
            $table->string('licenseplate')->unique()->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->foreignId('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreignId('permission_id')->references('id')->on('permissions')->cascadeOnDelete();
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
        });

        Schema::create('parkingspace', function (Blueprint $table) {
            $table->id();
            $table->string('Section');
            $table->string('Availability')->default('Available');
            $table->string('status')->default('Not Reserved');
            $table->timestamps();
        });
        
        Schema::create('parkingInstance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parkingSpace_id')->constrained('parkingSpace');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
        

        Schema::create('priceRates', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->unsignedInteger('Price');
            $table->timestamps();
        });

        Schema::create('parkingInvoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parkingInstance_id')->constrained('parkingInstance');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedInteger('Invoice');
            $table->string('state')->default('Not Paid');
            $table->timestamps();
        });

        Schema::create('parkingPayments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parkingInvoice_id')->constrained('parkingInvoice');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedInteger('AmountCharged');
            $table->unsignedInteger('AmountPaid');
            $table->integer('Balance');
            $table->timestamps();
        });

        Schema::create('Reservation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parkingSpace_id')->constrained('parkingSpace');
            $table->integer('Duration');
            $table->timestamps();
        });

        Schema::create('resInvoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Res_id')->constrained('Reservation');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedInteger('Amountcharged');
            $table->string('state')->default('Not Paid');
            $table->timestamps();
        });

        Schema::create('resPayments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resInvoice_id')->constrained('resInvoice');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedInteger('Amountcharged');
            $table->unsignedInteger('Amountpaid');
            $table->Integer('Balance');
            $table->timestamps();
        });

        Schema::create('postPay', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('Duration');
            $table->timestamps();
        });

        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->integer('Charge');
            $table->timestamps();
        });

        Schema::create('ChargeInvoice', function (Blueprint $table) {
            $table->id();
            $table->foreignId('charges_id')->constrained('charges');
            $table->foreignId('user_id')->constrained('users');
            $table->string('state')->default('Not Paid');
            $table->timestamps();
        });

        Schema::create('ChargesPayments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chargeInvoice_id')->constrained('ChargeInvoice');
            $table->foreignId('user_id')->constrained('users');
            $table->string('Amountcharged');
            $table->string('Amountpaid');
            $table->string('Balance');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('parkingInstance');
        Schema::dropIfExists('parkingSpace');
        Schema::dropIfExists('priceRates');
        Schema::dropIfExists('parkingInvoice');
        Schema::dropIfExists('parkingPayments');
        Schema::dropIfExists('Reservation');
        Schema::dropIfExists('resInvoice');
        Schema::dropIfExists('resPayments');
        Schema::dropIfExists('postPay');
        Schema::dropIfExists('charges');
        Schema::dropIfExists('ChargeInvoice');
        Schema::dropIfExists('ChargesPayments');
    }
};
