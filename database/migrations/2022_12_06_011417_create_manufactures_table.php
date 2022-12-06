<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('manufactures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->boolean('internet')->default(true);
            $table->boolean('magasin')->default(false);
            $table->boolean('cadeau')->default(false);
            $table->text('internet_description')->nullable();
            $table->text('magasin_description')->nullable();
            $table->text('cadeau_description')->nullable();
            $table->integer('internet_percent')->default(0);
            $table->integer('magasin_percent')->default(0);
            $table->integer('cadeau_percent')->default(0);
            $table->string('site_link');
            $table->timestamps();

            $table->foreignId('subcategory_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manufactures');
    }
};
