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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('brand_id');

            $table->string('model')->nullable();

            $table->string('manufacture year')->nullable(); //سنة التصنيع
            $table->string('wheel type')->nullable();    //نوع الدفع
            $table->string('product')->nullable();  //نوع المنتج الخاص بمكائن القهوة
            $table->string('machines place')->nullable(); //مكان المكائن للقوارب
            $table->string('machines type')->nullable(); //نوع المكائن
            $table->string('machines power')->nullable(); //قوة المكائن
            $table->string('machines age')->nullable();  //عمر المكائن
            $table->string('caple type')->nullable();    //نوع الكابل (لاسلكي\سلكي)
            $table->string('age')->nullable();     //العمر
            $table->string('transmission type')->nullable();  //نوع القير
            $table->string('kilometers')->nullable();   //عدد الكيلومتر
            $table->string('engine capacity')->nullable();   //سعة المحرك
            $table->string('screen size')->nullable();   //حجم الشاشة
            $table->string('memory')->nullable();   //الميموري
            $table->string('storage')->nullable();  //سعة التخزين
            $table->string('generation')->nullable();   //الجيل
            $table->string('color')->nullable();    //اللون
            $table->string('accessories')->nullable();  //الملحقات
            $table->string('processor')->nullable();    //المعالج
            $table->string('cooling power')->nullable(); //قوة التبريد
            $table->string('cooling type')->nullable();  //نوع التبريد
            $table->string('capacitance')->nullable();  //السعة للاجهزة المنزلية
            $table->string('megapixel')->nullable();    //عدد الميجات للكاميرات
            $table->string('screen type')->nullable();   //نوع الشاشة للتلفيزيونات
            $table->string('length')->nullable();   //الطول للقوارب
            $table->string('machines number')->nullable();   //عدد المكائن للقوارب
            $table->string('size')->nullable(); //المقاس للعدد والادوات
            $table->string('manufacture type')->nullable(); //نوع التصنيع للاثاث
            $table->string('fuel')->nullable(); //نوع الوقود
            $table->string('energy')->nullable();  //الطاقة للعدد والادوات
            $table->string('city')->nullable();  //المدينة للسيارات
            $table->string('material')->nullable();  //المادة للمقتنيات


            $table->text('description')->nullable();
            $table->unsignedInteger('price');



            $table->boolean('status')->default('0'); //Approved or not


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
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
