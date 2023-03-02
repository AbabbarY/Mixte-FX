<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string("slug")->unique;
            $table->string("description");
            $table->string('image');
            $table->decimal("prix",8,2)->default(0);
            $table->decimal("old-prix",8,2)->default(0);
            $table->integer("quantité")->default(0);
            $table->string("type");
            $table->boolean('offres')->default(0);
            $table->BigInteger('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
