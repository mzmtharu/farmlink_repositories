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
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 肥料名
            $table->string('nutrient')->nullable(); // 栄養素
            $table->date('purchase_date')->nullable(); // 購入日または棚卸日
            $table->integer('quantity')->default(0); // 数量 デフォルトは0
            $table->decimal('application_rate', 8, 2)->nullable(); // 散布量
            $table->string('lot_number')->nullable(); // ロット番号
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizers');
    }
};