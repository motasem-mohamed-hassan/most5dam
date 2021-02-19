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
            $table->unsignedBigInteger('subCategory_id');

            $table->string('name')->nullable();

            $table->string('manufactureYear')->nullable(); //سنة التصنيع
            $table->string('wheelType')->nullable();    //نوع الدفع
            $table->string('product')->nullable();  //نوع المنتج الخاص بمكائن القهوة
            $table->string('machinesPlace')->nullable(); //مكان المكائن للقوارب
            $table->string('machinesType')->nullable(); //نوع المكائن
            $table->string('machinesPower')->nullable(); //قوة المكائن
            $table->string('machinesAge')->nullable();  //عمر المكائن
            $table->string('capleType')->nullable();    //نوع الكابل (لاسلكي\سلكي)
            $table->string('age')->nullable();     //العمر
            $table->string('transmissionType')->nullable();  //نوع القير
            $table->string('kilometers')->nullable();   //عدد الكيلومتر
            $table->string('engineCapacity')->nullable();   //سعة المحرك
            $table->string('screensize')->nullable();   //حجم الشاشة
            $table->string('memory')->nullable();   //الميموري
            $table->string('storage')->nullable();  //سعة التخزين
            $table->string('generation')->nullable();   //الجيل
            $table->string('color')->nullable();    //اللون
            $table->string('accessories')->nullable();  //الملحقات
            $table->string('processor')->nullable();    //المعالج
            $table->string('coolingPower')->nullable(); //قوة التبريد
            $table->string('coolingType')->nullable();  //نوع التبريد
            $table->string('capacitance')->nullable();  //السعة للاجهزة المنزلية
            $table->string('megapixel')->nullable();    //عدد الميجات للكاميرات
            $table->string('screenType')->nullable();   //نوع الشاشة للتلفيزيونات
            $table->string('length')->nullable();   //الطول للقوارب
            $table->string('machinesNumber')->nullable();   //عدد المكائن للقوارب
            $table->string('size')->nullable(); //المقاس للعدد والادوات
            $table->string('manufactureType')->nullable(); //نوع التصنيع للاثاث
            $table->string('fuelType')->nullable(); //نوع الوقود
            $table->string('energy')->nullable();  //الطاقة للعدد والادوات

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
