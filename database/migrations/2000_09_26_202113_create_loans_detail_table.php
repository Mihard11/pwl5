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
        Schema::create('loans_detail', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->boolean('is_return');
            $table->timestamps();
        });
        Schema::table('return', function (Blueprint $table) {
            $table->foreignId('loan_detail_id')->after('id');
            $table->foreign('loan_detail_id')
                    ->references('id')
                    ->on('loans_detail')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('return', function (Blueprint $table) {
            $table->dropForeign('return_loan_detail_id_foreign');
            $table->dropColumn('loan_detail_id');
        });
        Schema::dropIfExists('loans_detail');
    }
};
