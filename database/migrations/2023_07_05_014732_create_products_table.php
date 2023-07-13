<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->decimal('preco');
            $table->integer('quantidade');
            $table->enum('difficulty', ['tipo 1', 'tipo 2', 'tipo 3'])->comment('difficulty: tipo 1, tipo 2, tipo 3');
            $table->jsonb('options')->nullable();
            //$table->jsonb('optionsdois')->default(new Expression('(JSON_ARRAY())'));
            $table->longText('description')->nullable();

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')
                ->constrained(
                    table: 'users', indexName: 'produtos_user_id'
                )
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 100)->change();
        });


        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
