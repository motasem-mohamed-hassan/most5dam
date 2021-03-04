<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    => '1',
            'name' => 'admin',
            'phone_number'  => '0555555555',
            'acc_number'    =>  '000000000000000000000000',
            'city'       =>  'makka',
            'neighborhood'  => 'hay',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
        ]);

        Role::create(['name' => 'superAdmin']);
        Role::create(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole('superAdmin');


        DB::table('pages')->insert([
            'id'            => '1',
            'header'        => 'مرحبا بكم في موقعنا',
            'description'   => 'تعريف بالموقع تعريف بالموقع تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع  تعريف بالموقع تعريف بالموقع',
            'section2'      =>  'شروط واحكام',
            'description2'  =>  'شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  شروط واحكام  ',
            'section3'      =>  'سياسة الاستخدام',
            'description3'  =>  'سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  سياسة الاستخدام  '
        ]);

        DB::table('settings')->insert([
            'id'            =>  '1',
            'phone1'        =>  '0',
            'phone2'        =>  '0',
            'location'      =>  'location',
            'facebook'      =>  'www.facebook.com',
            'twitter'       =>  'www.twitter.com',
            'instegram'     =>  'www.instegram.com',
            'description'   =>  'some description',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '1',
            'الاسم'        =>  'سيارات',
            'name'      =>  'Cars',
            'icon'      =>  asset('frontend/images/avatar.png')
        ]);
        DB::table('categories')->insert([
            'id'            =>  '2',
            'الاسم'        =>  'موبايلات',
            'name'      =>  'Mobile',
            'icon'      =>  asset('frontend/images/avatar.png')


     ]);

        DB::table('categories')->insert([
            'id'            =>  '3',
            'الاسم'        =>  'اجهزة لوحية',
            'name'      =>  'Tablets',
            'icon'      =>  asset('frontend/images/avatar.png')


     ]);

        DB::table('categories')->insert([
            'id'            =>  '4',
            'الاسم'        =>  'لابتوب',
            'name'      =>      'laptop',
            'icon'      =>  asset('frontend/images/avatar.png')


     ]);

        DB::table('categories')->insert([
            'id'            =>  '5',
            'الاسم'        =>  'كومبيوتر مكتبي',
            'name'      =>  'Desktop Computer',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '6',
            'الاسم'        =>  'مكيفات',
            'name'      =>  'Conditioners',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '7',
            'الاسم'        =>  'اجهزة منزلية كبيرة',
            'name'      =>  'Large Home Appliances',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '8',
            'الاسم'        =>  'اجهزة منزلية صغيرة',
            'name'      =>  'Small Home Appliances',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '9',
            'الاسم'        =>  'كاميرات',
            'name'      =>  'Cameras',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '10',
            'الاسم'        =>  'تلفيزيونات',
            'name'      =>  'Televisions',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '11',
            'الاسم'        =>  'العاب الكترونية',
            'name'      =>  'Video Games',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '12',
            'الاسم'        =>  'مكائن القهوة',
            'name'      =>  'Coffee machines',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '13',
            'الاسم'        =>  'قوارب',
            'name'      =>  'Boats',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '14',
            'الاسم'        =>  'عدد وادوات',
            'name'      =>  'Tools',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '15',
            'الاسم'        =>  'معدات رياضية',
            'name'      =>  'Sports Equipment',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '16',
            'الاسم'        =>  'اثاث',
            'name'      =>  'Furniture',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '17',
            'الاسم'        =>  'معدات صناعية',
            'name'      =>  'Industrial equipment',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '18',
            'الاسم'        =>  'اجهزة طبية',
            'name'      =>  'Medical Devices',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        DB::table('categories')->insert([
            'id'            =>  '19',
            'الاسم'        =>  'مقتنيات ثمينة',
            'name'      =>  'Valuables',
            'icon'      =>  asset('frontend/images/avatar.png')

        ]);

        //Filters

        //السيارات
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);

        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'manufacture year',
            'الاسم'         =>   'سنة الصنع',
            'show_in_filter'=>  'yes',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'city',
            'الاسم'         =>   'المدينة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'transmission type',
            'الاسم'         =>   'نوع القير',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'wheel type',
            'الاسم'         =>   'نوع الدفع',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'fuel type',
            'الاسم'         =>   'نوع الوقود',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'kilometers',
            'الاسم'         =>   'عداد الكيلو',
            'show_in_filter'=>  'yes',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'engine capacity',
            'الاسم'         =>   'سعة المحرك',
            'show_in_filter'=>  'yes',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '1',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);





        //موبايلات
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'screen size',
            'الاسم'         =>   'حجم الشاشة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'memory',
            'الاسم'         =>   'الرام',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'storage',
            'الاسم'         =>   'التخزين',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'generation',
            'الاسم'         =>   'الجيل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'color',
            'الاسم'         =>   'اللون',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '2',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //تاب
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'screen size',
            'الاسم'         =>   'حجم الشاشة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'memory',
            'الاسم'         =>   'الرام',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'storage',
            'الاسم'         =>   'التخزين',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'generation',
            'الاسم'         =>   'الجيل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'color',
            'الاسم'         =>   'اللون',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'accessories',
            'الاسم'         =>   'الملحقات',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '3',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //لابتوب
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'processor',
            'الاسم'         =>   'المعالج',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'memory',
            'الاسم'         =>   'الرام',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'storage',
            'الاسم'         =>   'سعة التخزين',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '4',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //كمبيوتر مكتبي
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'processor',
            'الاسم'         =>   'المعالج',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'memory',
            'الاسم'         =>   'الرام',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'storage',
            'الاسم'         =>   'سعة التخزين',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '5',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //مكيفات
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'cooling power',
            'الاسم'         =>   'طاقة التبريد',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'cooling type',
            'الاسم'         =>   'نوع التبريد',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '6',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //اجهزة كبيرة
        DB::table('filters')->insert([
            'category_id'   =>  '7',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '7',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '7',
            'name'          =>  'capacitance',
            'الاسم'         =>   'السعة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '7',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '7',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //اجهزة صغيرة
        DB::table('filters')->insert([
            'category_id'   =>  '8',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '8',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '8',
            'name'          =>  'capacitance',
            'الاسم'         =>   'السعة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '8',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '8',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //الكاميرات
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'megapixel',
            'الاسم'         =>   'ميغابكسل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'storage',
            'الاسم'         =>   'ذاكرة التخزين',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '9',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //تلفيزيونات
        DB::table('filters')->insert([
            'category_id'   =>  '10',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '10',
            'name'          =>  'screen size',
            'الاسم'         =>   'حجم الشاشة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '10',
            'name'          =>  'screen type',
            'الاسم'         =>   'نوع الشاشة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '10',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '10',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //العاب الكترونية
        DB::table('filters')->insert([
            'category_id'   =>  '11',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '11',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '11',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //مكائن القهوة
        DB::table('filters')->insert([
            'category_id'   =>  '12',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '12',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '12',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '12',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //قوارب
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'length',
            'الاسم'         =>   'الطول',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'machines place',
            'الاسم'         =>   'مكان المكائن',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'machines number',
            'الاسم'         =>   'عدد المكائن',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'machines type',
            'الاسم'         =>   'نوع الماكينه',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'machines power',
            'الاسم'         =>   'قوة الماكينه',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'age',
            'الاسم'         =>   'عمر القارب',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '13',
            'name'          =>  'machines age',
            'الاسم'         =>   'عمر المكائن',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //عدد وادوات
        DB::table('filters')->insert([
            'category_id'   =>  '14',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '14',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '14',
            'name'          =>  'caple type',
            'الاسم'         =>   'نوع الكابل',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '14',
            'name'          =>  'size',
            'الاسم'         =>   'المقاس',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //معدات رباضية
        DB::table('filters')->insert([
            'category_id'   =>  '15',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '15',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '15',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '15',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //اثاث
        DB::table('filters')->insert([
            'category_id'   =>  '16',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '16',
            'name'          =>  'manufacture type',
            'الاسم'         =>   'نوع التصنيع',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '16',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //معدات صناعية
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'yes',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'model',
            'الاسم'         =>   'الموديل',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'fuel type',
            'الاسم'         =>   'نوع الوقود',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'energy',
            'الاسم'         =>   'الطاقة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '17',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);



        //اجهزة طبية
        DB::table('filters')->insert([
            'category_id'   =>  '18',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '18',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '18',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


        //مقتنيات ثمينة
        DB::table('filters')->insert([
            'category_id'   =>  '19',
            'name'          =>  'brand',
            'الاسم'         =>   'الماركة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '1'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '19',
            'name'          =>  'material',
            'الاسم'         =>   'المادة',
            'show_in_filter'=>  'no',
            'type'          =>  'select',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '19',
            'name'          =>  'age',
            'الاسم'         =>   'العمر',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);
        DB::table('filters')->insert([
            'category_id'   =>  '19',
            'name'          =>  'description',
            'الاسم'         =>   'وصف الحالة',
            'show_in_filter'=>  'no',
            'type'          =>  'input',//select / input
            'brand'         =>  '0'//1/0
        ]);


































        // //subCategories
        // DB::table('categories')->insert([
        //     'id'            =>  '20',
        //     'parent_id'     =>  '1',
        //     'name'        =>  'توبوتا',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '21',
        //     'parent_id'     =>  '1',
        //     'name'        =>  'فورد',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '22',
        //     'parent_id'     =>  '1',
        //     'name'        =>  'كيا',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '23',
        //     'parent_id'     =>  '1',
        //     'name'        =>  'هافال',
        // ]);

        // //
        // DB::table('categories')->insert([
        //     'id'            =>  '24',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'ابل',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '25',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'سامسونج',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '26',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'هواوي',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '27',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'موتوريلا',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '28',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'نوكيا',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '29',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'هونر',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '30',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'الكاتل',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '31',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'تكنو',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '34',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'اوبو',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '35',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'فيفو',
        // ]);
        // DB::table('categories')->insert([
        //     'id'            =>  '36',
        //     'parent_id'     =>  '2',
        //     'name'        =>  'لافا',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'ابل',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'سامسونج',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'هواوي',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'موتوريلا',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'نوكيا',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'هونر',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'الكاتل',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'تكنو',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'اوبو',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'فيفو',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '3',
        //     'name'        =>  'لافا',
        // ]);



        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '4',
        //     'name'        =>  'HP',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '4',
        //     'name'        =>  'DELL',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '4',
        //     'name'        =>  'Samsung',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '5',
        //     'name'        =>  'HP',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '5',
        //     'name'        =>  'DELL',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '5',
        //     'name'        =>  'lenovo',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '5',
        //     'name'        =>  'Mac',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '5',
        //     'name'        =>  'اخرى',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '6',
        //     'name'        =>  'اسبلبت',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '6',
        //     'name'        =>  'شباكي',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '6',
        //     'name'        =>  'سبليت دكت',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '6',
        //     'name'        =>  'مركزي',
        // ]);

        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '7',
        //     'name'        =>  'ثلاجة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '7',
        //     'name'        =>  'غسالة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '7',
        //     'name'        =>  'بوتوغاز',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '7',
        //     'name'        =>  'برادة ماء',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'مكنسة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'فلاية هوائية',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'خلاط',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'فرن حراري',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'مكواه',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'عصارة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'عجانة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'مايكروويف',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'محضر طعام',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'قدر ضغط',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '8',
        //     'name'        =>  'دفاية فرامة',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '9',
        //     'name'        =>  'نيكون',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '9',
        //     'name'        =>  'كانون',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '9',
        //     'name'        =>  'مبولتا',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '9',
        //     'name'        =>  'سوني',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '9',
        //     'name'        =>  'بانتاكس',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'سامسونغ',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'ال جي',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'سوني',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'كلاس',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'توشيبا',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'تي سي ال',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '10',
        //     'name'        =>  'اخرى',
        // ]);

        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '11',
        //     'name'        =>  'سوني',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '11',
        //     'name'        =>  'نينتيندو',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'كروبس',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'ديلونقي',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'نسبريسو',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'فليبس',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'براون',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '12',
        //     'name'        =>  'اخرى',
        // ]);



        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '13',
        //     'name'        =>  'سيلككرافت',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '13',
        //     'name'        =>  'الخليج',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '13',
        //     'name'        =>  'اخرى',
        // ]);



        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'مثقاب\دريل',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'منشار قرص',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'منشار منحنيات',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'صاروخ جلخ',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'منشار بقاعدة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'مسدس دهان',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'ماكينة لحام',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'ماكينة صغط ماء',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'جلاخة طاولة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'فارة خشب',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'فرازة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '14',
        //     'name'        =>  'مسدس حرارة',
        // ]);



        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'هوم جم',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'جهاز جري',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'دراجة تمارين',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'طاولة تنس',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'دراجة هوائية',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'مسبح',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'نطاطة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '15',
        //     'name'        =>  'جعاز تمارين اثقال',
        // ]);



        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'غرفة نوم',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'غرفة طعام',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'كنب',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'سرر',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'طاولة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'مكتب',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'سجادة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'ستارة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'طاولة مكتب',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'ارفف',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'دولاب',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'دواليب مطبخ',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'كنبة استرخاء',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'كرسي دوار',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'طاولة كمبيوتر',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'ارجوحة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '16',
        //     'name'        =>  'مروحة',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '17',
        //     'name'        =>  'مولد كهرباء',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '17',
        //     'name'        =>  'ماكينة لحام',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '18',
        //     'name'        =>  'كرسي طبي',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '18',
        //     'name'        =>  'جهاز اوكسجين',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '18',
        //     'name'        =>  'سرير طبي',
        // ]);


        // //
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'خاتم',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'عقد',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'طقم',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'ساعة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'حجر كريم',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'تحفة',
        // ]);
        // DB::table('categories')->insert([
        //     'parent_id'     =>  '19',
        //     'name'        =>  'اخرى',
        // ]);





















    }
}
