<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkbuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('okbuy.database.connection') ?: config('database.default');

        Schema::connection($connection)->create(config('okbuy.database.product_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sku')->default(0)->comment('商品sku');
            $table->string('brand')->default('')->comment('商品品牌');
            $table->string('code')->default('');
            $table->float('agent_price')->default(0)->comment('商品价格');
            $table->string('name')->default('')->comment('商品名称');
            $table->string('category')->default('')->comment('分类');
            $table->string('gender')->default('')->comment('性别');
            $table->string('color')->default('')->comment('颜色');
            $table->string('main_color')->default('')->comment('颜色');
            $table->float('market_price')->default(0)->comment('市场价');
            $table->float('discount',8,3)->default(0)->comment('折扣率');
            $table->string('date', 20)->default('')->comment('日期');
            $table->text('description')->nullable()->comment('描述');
            $table->json('property')->comment('属性描述');
            $table->string('image')->default('')->comment('图片');
            $table->text('all_images')->nullable()->comment('图片');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->tinyInteger('sign')->default(0)->comment('更新标记');
            $table->timestamps();
        });

        Schema::connection($connection)->create(config('okbuy.database.category_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->comment('父分类ID');
            $table->string('name')->default('')->comment('分类名称');
            $table->integer('is_display')->default(0)->comment('是否显示');
            $table->integer('display_order')->default(0)->comment('显示顺序');
            $table->timestamps();
        });

        Schema::connection($connection)->create(config('okbuy.database.shopping_cart_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->default(0)->comment('用户ID');
            $table->integer('sku')->default(0)->comment('商品sku');
            $table->integer('price')->default(0)->comment('市场单价，单位：分');
            $table->integer('count')->default(0)->comment('购买数量');
            $table->string('size')->default('')->comment('商品尺码');
            $table->integer('status')->default(0)->comment('状态');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::connection($connection)->create(config('okbuy.database.order_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->default(0)->comment('用户ID');
            $table->integer('price')->default(0)->comment('订单价格，单位：分');
            $table->integer('freight')->default(0)->comment('运费，单位：分');
            $table->integer('more_price')->default(0)->comment('额外手续费，单位：分');
            $table->integer('address_id')->default(0)->comment('地址ID');
            $table->tinyInteger('distribution')->default(0)->comment('配送方式');
            $table->string('message')->default('')->comment('给商家留言');
            $table->tinyInteger('pay_status')->default(0)->comment('支付状态');
            $table->integer('status')->default(0)->comment('订单状态');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::connection($connection)->create(config('okbuy.database.order_products_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->default(0)->comment('订单ID');
            $table->string('name')->default('')->comment('商品名称');
            $table->integer('sku')->default(0)->comment('商品sku');
            $table->integer('count')->default(0)->comment('购买数量');
            $table->string('size')->default('')->comment('商品尺码');
            $table->integer('price')->default(0)->comment('购买时商品市场单价，单位：分');
            $table->integer('status')->default(0)->comment('状态');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $connection = config('okbuy.database.connection') ?: config('database.default');

        Schema::connection($connection)->dropIfExists(config('okbuy.database.product_table'));
        Schema::connection($connection)->dropIfExists(config('okbuy.database.category_table'));
        Schema::connection($connection)->dropIfExists(config('okbuy.database.shopping_cart_table'));
        Schema::connection($connection)->dropIfExists(config('okbuy.database.order_table'));
        Schema::connection($connection)->dropIfExists(config('okbuy.database.order_products_table'));
    }
}
