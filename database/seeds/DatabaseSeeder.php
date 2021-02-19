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
            'name'        =>  'سيارات',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '2',
            'name'        =>  'موبايلات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '3',
            'name'        =>  'اجهزة لوحية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '4',
            'name'        =>  'لابتوب',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '5',
            'name'        =>  'كومبيوتر مكتبي',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '6',
            'name'        =>  'مكيفات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '7',
            'name'        =>  'اجهزة منزلية كبيرة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '8',
            'name'        =>  'اجهزة منزلية صغيرة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '9',
            'name'        =>  'كاميرات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '10',
            'name'        =>  'تلفيزيونات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '11',
            'name'        =>  'العاب الكترونية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '12',
            'name'        =>  'مكائن القهوة',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '13',
            'name'        =>  'قوارب',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '14',
            'name'        =>  'عدد وادوات',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '15',
            'name'        =>  'معدات رياضية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '16',
            'name'        =>  'اثاث',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '17',
            'name'        =>  'معدات صناعية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '18',
            'name'        =>  'اجهزة طبية',
        ]);

        DB::table('categories')->insert([
            'id'            =>  '19',
            'name'        =>  'مقتنيات ثمينة',
        ]);


        //subCategories
        DB::table('categories')->insert([
            'id'            =>  '20',
            'parent_id'     =>  '1',
            'name'        =>  'توبوتا',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '21',
            'parent_id'     =>  '1',
            'name'        =>  'فورد',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '22',
            'parent_id'     =>  '1',
            'name'        =>  'كيا',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '23',
            'parent_id'     =>  '1',
            'name'        =>  'هافال',
        ]);

        //
        DB::table('categories')->insert([
            'id'            =>  '24',
            'parent_id'     =>  '2',
            'name'        =>  'ابل',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '25',
            'parent_id'     =>  '2',
            'name'        =>  'سامسونج',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '26',
            'parent_id'     =>  '2',
            'name'        =>  'هواوي',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '27',
            'parent_id'     =>  '2',
            'name'        =>  'موتوريلا',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '28',
            'parent_id'     =>  '2',
            'name'        =>  'نوكيا',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '29',
            'parent_id'     =>  '2',
            'name'        =>  'هونر',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '30',
            'parent_id'     =>  '2',
            'name'        =>  'الكاتل',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '31',
            'parent_id'     =>  '2',
            'name'        =>  'تكنو',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '34',
            'parent_id'     =>  '2',
            'name'        =>  'اوبو',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '35',
            'parent_id'     =>  '2',
            'name'        =>  'فيفو',
        ]);
        DB::table('categories')->insert([
            'id'            =>  '36',
            'parent_id'     =>  '2',
            'name'        =>  'لافا',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'ابل',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'سامسونج',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'هواوي',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'موتوريلا',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'نوكيا',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'هونر',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'الكاتل',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'تكنو',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'اوبو',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'فيفو',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '3',
            'name'        =>  'لافا',
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name'        =>  'HP',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name'        =>  'DELL',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '4',
            'name'        =>  'Samsung',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name'        =>  'HP',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name'        =>  'DELL',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name'        =>  'lenovo',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name'        =>  'Mac',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '5',
            'name'        =>  'اخرى',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name'        =>  'اسبلبت',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name'        =>  'شباكي',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name'        =>  'سبليت دكت',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '6',
            'name'        =>  'مركزي',
        ]);

        //
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name'        =>  'ثلاجة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name'        =>  'غسالة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name'        =>  'بوتوغاز',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '7',
            'name'        =>  'برادة ماء',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'مكنسة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'فلاية هوائية',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'خلاط',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'فرن حراري',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'مكواه',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'عصارة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'عجانة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'مايكروويف',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'محضر طعام',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'قدر ضغط',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '8',
            'name'        =>  'دفاية فرامة',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name'        =>  'نيكون',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name'        =>  'كانون',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name'        =>  'مبولتا',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name'        =>  'سوني',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '9',
            'name'        =>  'بانتاكس',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'سامسونغ',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'ال جي',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'سوني',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'كلاس',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'توشيبا',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'تي سي ال',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '10',
            'name'        =>  'اخرى',
        ]);

        //
        DB::table('categories')->insert([
            'parent_id'     =>  '11',
            'name'        =>  'سوني',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '11',
            'name'        =>  'نينتيندو',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'كروبس',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'ديلونقي',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'نسبريسو',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'فليبس',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'براون',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '12',
            'name'        =>  'اخرى',
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name'        =>  'سيلككرافت',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name'        =>  'الخليج',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '13',
            'name'        =>  'اخرى',
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'مثقاب\دريل',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'منشار قرص',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'منشار منحنيات',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'صاروخ جلخ',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'منشار بقاعدة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'مسدس دهان',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'ماكينة لحام',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'ماكينة صغط ماء',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'جلاخة طاولة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'فارة خشب',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'فرازة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '14',
            'name'        =>  'مسدس حرارة',
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'هوم جم',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'جهاز جري',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'دراجة تمارين',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'طاولة تنس',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'دراجة هوائية',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'مسبح',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'نطاطة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '15',
            'name'        =>  'جعاز تمارين اثقال',
        ]);



        //
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'غرفة نوم',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'غرفة طعام',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'كنب',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'سرر',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'طاولة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'مكتب',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'سجادة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'ستارة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'طاولة مكتب',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'ارفف',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'دولاب',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'دواليب مطبخ',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'كنبة استرخاء',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'كرسي دوار',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'طاولة كمبيوتر',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'ارجوحة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '16',
            'name'        =>  'مروحة',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '17',
            'name'        =>  'مولد كهرباء',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '17',
            'name'        =>  'ماكينة لحام',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name'        =>  'كرسي طبي',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name'        =>  'جهاز اوكسجين',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '18',
            'name'        =>  'سرير طبي',
        ]);


        //
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'خاتم',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'عقد',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'طقم',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'ساعة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'حجر كريم',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'تحفة',
        ]);
        DB::table('categories')->insert([
            'parent_id'     =>  '19',
            'name'        =>  'اخرى',
        ]);





















    }
}
