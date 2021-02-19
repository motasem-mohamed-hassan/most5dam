@extends('layouts.master')
@section('content')<br><br><br>
<div class="ads-grid">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">{{ $category->name }}
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
    </div>
</div>

    <div id="adding-product" class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('post_add')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <input style="display: none" type="text" name="subCategory_id" class="form-control" value="{{ $subCategory_id }}">
            <input style="display: none" type="text" name="category_id" class="form-control" value="{{ $category->id }}">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">اسم المنتج</label>

                    <div class="clearfix"></div>
                </div>
            </div>

            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="manufactureYear" id="name" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>
                    <label class="col-md-2 text-center mr-5">سنة التصنيع</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="screensize">
                            <option disabled selected>نوع الدفع</option>
                            <option value="ثنائي">ثنائي</option>
                            <option value="رباعي">رباعي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع الدفع</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكائن القهوة')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="product">
                            <option disabled selected>المنتج</option>
                            <option value="كاباتشينو">كاباتشينو</option>
                            <option value="اسبريسو">اسبريسو</option>
                            <option value="قهوة امريكي">قهوة امريكي</option>
                            <option value="قهوة عربي">قهوة عربي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع المنتج</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="machinesPlace">
                            <option disabled selected>مكان المكائن</option>
                            <option value="داخلي">داخلي</option>
                            <option value="داخلي">خارجي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">مكان المكائن</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="machinesType" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع المكائن</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="machinesPower" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">قوة المكائن</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="machinesAge" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">عمر المكائن</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="capleType">
                            <option disabled selected>نوع الكابل</option>
                            <option value="لاسلكي">لاسلكي</option>
                            <option value="سلكي">سلكي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع الكابل</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="transmissionType">
                            <option disabled selected>نوع القير</option>
                            <option value="اوتوماتيك">اوتوماتيك</option>
                            <option value="اوتوماتيك">عادي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع القير</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="kilometers" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">عدد الكيلومتر</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="engineCapacity" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">سعة المحرك</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اجهزة لوحية' OR $category->name == 'موبايلات' OR $category->name == 'لابتوب' OR $category->name == 'تلفيزيونات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="screensize" id="name" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>
                    <label class="col-md-2 text-center mr-5">حجم الشاشة</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="memory">
                            <option disabled selected>الرام</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                            <option value="32">16</option>
                            <option value="64">16</option>
                        </select><br>
                        </div>
                        <label class="col-md-2 text-center mr-5">الرام</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="storage">
                            <option disabled selected>سعة التحزين</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="8">8</option>
                            <option value="16">16</option>
                            <option value="32">32</option>
                            <option value="64">64</option>
                            <option value="120">120</option>
                            <option value="120">512</option>
                            <option value="120">1T</option>
                            <option value="120">2T</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">سعة التخزين</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="generation">
                            <option disabled selected>الجيل</option>
                            <option value="2G">2G</option>
                            <option value="3G">3G</option>
                            <option value="4G">4G</option>
                            <option value="5G">5G</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">الجيل</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'سيارات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="color" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">اللون</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="accessories" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">الملحقات</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'موبايلات' OR $category->name == 'اجهزة لوحية' OR $category->name == 'لابتوب' OR $category->name == 'كومبيوتر مكتبي')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="processor" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">المعالج</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكيفات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="coolingPower" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">قوة التبريد</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'مكيفات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="coolingType">
                            <option disabled selected>نوع التبريد</option>
                            <option value="رقمي">رقمي</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع التبريد</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اجهزة منزلية كبيرة' OR $category->name == 'اجهزة منزلية صغيرة')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="capacitance" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">السعة</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'كاميرات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="megapixel" id="name" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>
                    <label class="col-md-2 text-center mr-5">عدد الميجات للكاميرات</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'تلفيزيونات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="screenType">
                            <option disabled selected>نوع الشاشة</option>
                            <option value="OLED">OLED</option>
                            <option value="QLED">QLED</option>
                            <option value="HD 4K">HD 4K</option>
                            <option value="LED">LED</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع الشاشة</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="length" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">الطول </label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'قوارب')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="machinesNumber" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">عدد المكائن</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="size" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">المقاس</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'اثاث')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="manufactureType">
                            <option disabled selected>نوع التصنيع</option>
                            <option value="جاهز">جاهز</option>
                            <option value="تفصيل">تفصيل</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع التصنيع</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'سيارات' OR $category->name == 'معدات صناعية')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <select class="form-control" name="fuelType">
                            <option disabled selected>نوع الوقود</option>
                            <option value="بنزين">بنزين</option>
                            <option value="ديزل">ديزل</option>
                            <option value="غاز">غاز</option>
                            <option value="كهرباء">كهرباء</option>
                        </select><br>
                    </div>
                    <label class="col-md-2 text-center mr-5">نوع الوقود</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            @if($category->name == 'عدد وادوات')
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="energy" id="name" class="form-control">
                    </div>
                    <label class="col-md-2 text-center mr-5">الطاقة</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            @endif
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7 ">
                        <input type="text" name="age" id="name" class="form-control" onkeypress="return onlyNumberKey(event)">
                    </div>
                    <label class="col-md-2 text-center mr-5">العمر</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <label class="col-md-2 text-center mt-4">الوصف</label>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <label class="col-md-2 text-center">السعر</label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">

                    <div class="col-md-7">
                        <input class="btn back" type="file" name="image[]" id="image" class="form-control" multiple>
                    </div>
                    <label class="col-md-2 text-center">صور المنتج</label>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer "style="display: flex; justify-content:flex-end">
                <input  type="submit" class="btn btn-info" value="اضافة">
            </div>
        </form>
    </div>



@endsection
