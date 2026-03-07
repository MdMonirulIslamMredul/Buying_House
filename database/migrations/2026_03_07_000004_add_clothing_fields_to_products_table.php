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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->after('name')->default(0.00);
            $table->string('sku')->nullable()->after('price');
            $table->integer('stock')->default(0)->after('sku');
            $table->string('size')->nullable()->after('stock');
            $table->string('color')->nullable()->after('size');
            $table->string('material')->nullable()->after('color');
            $table->string('gender')->nullable()->after('material');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['price', 'sku', 'stock', 'size', 'color', 'material', 'gender']);
        });
    }
};
