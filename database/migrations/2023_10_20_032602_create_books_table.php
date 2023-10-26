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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('author');
            $table->year('year');
            $table->string('publisher');
            $table->string('city');
            $table->string('cover')->nullable();
            $table->timestamps();

        });
        Schema::table('loans_detail', function (Blueprint $table) {
            $table->foreignId('book_id')->after('id');
            $table->foreign('book_id')
                    ->references('id')
                    ->on('books')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
        Schema::table('categories', function (Blueprint $table) {

            $table->foreign('id')
                    ->references('id')
                    ->on('books')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_id_foreign');
        });
        Schema::dropIfExists('books');
    }
};
