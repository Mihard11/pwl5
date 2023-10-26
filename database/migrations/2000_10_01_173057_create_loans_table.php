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
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('loans_id');
            // $table->bigInteger('user_id');
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamps();
        });
        Schema::table('loans_detail', function (Blueprint $table) {
            $table->foreignId('loan_id')->after('id');
            $table->foreign('loan_id')
                    ->references('loans_id')
                    ->on('loans')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('loans_detail', function (Blueprint $table) {
            $table->dropForeign('loan_detail_loan_id_foreign');
            $table->dropColumn('loan_id');
        });
        Schema::dropIfExists('loans');
    }
};
