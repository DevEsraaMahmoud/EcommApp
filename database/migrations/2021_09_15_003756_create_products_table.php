<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('subcategory_id');
            $table->foreignId('subsubcategory_id');
            $table->string('product_name', 191);
            $table->string('product_slug', 191);
            $table->decimal('product_code', 8, 2);
            $table->decimal('product_qty', 8, 2);
            $table->string('product_tag', 191);
            $table->string('product_size', 191)->nullable();
            $table->string('product_color', 191);
            $table->decimal('selling_price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->longText('short_descp');
            $table->longText('long_descp');
            $table->longText('product_thambnail');
            $table->string('hot_deals', 191)->nullable();
            $table->string('featured', 191)->nullable();
            $table->string('special_offer', 191)->nullable();
            $table->string('special_deals', 191)->nullable();
            $table->decimal('status', 8, 2);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
