<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('clientid')->nullable();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('additional_phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('trade')->nullable();
            $table->string('nid')->nullable();
            $table->bigInteger('country_id')->unsigned()->nullable();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->string('blood_group')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_exp_date')->nullable();
            $table->string('work_permit_date')->nullable();
            $table->string('present_address')->nullable();
            $table->double('payable_amount',10,2)->default(0);
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upozela')->nullable();
            $table->string('post_office')->nullable();
            $table->string('police_clearance_date')->nullable();
            $table->string('medical_test_date')->nullable();
            $table->string('medical_test_exp_date')->nullable();
            $table->string('medical_report_submit_date')->nullable();
            $table->bigInteger('account_id')->unsigned()->nullable();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->boolean('processing')->default(1);
            $table->boolean('complete')->default(0);
            $table->boolean('decline')->default(0);
            $table->boolean('status')->default(0);
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
