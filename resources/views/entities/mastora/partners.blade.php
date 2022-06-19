@include('layouts.header')
<section class="pt-5 pb-5"
    style="background: url(/mastora/img/Group\ 52.png) #F7F7F7 no-repeat; background-size: cover; background-position: center;">
    <!--Popup-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <select name="" id="modal-niceSelect" class="modal-niceSelect">
                                <option selected value="">اختار الشريك</option>
                                @foreach ($partners as $partener )
                                    <option value="{{$partener->id}}">{{$partener->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <p class="notes mb-2">ملاحظات</p>

                            <input type="text"
                                placeholder=" اتلتال تالتا تاملات س لنمو تاكا مالنا الكخ لبي اكح؛ن يقغتعب أنسب بردلك زز ">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="modal-footer d-flex justify-content-center">

                        <div class="col-8">
                            <button type="button" class="done">تعيين</button>
                        </div>

                        <div class="col-3">
                            <button type="button" class="cancel" data-bs-dismiss="modal">الغاء</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end popup-->

    <!--Delete Alert -->

    <div id="CloseModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="fas fa-times"></i>
                    </div>
                    <h4 class="modal-title w-100">هل أنت متأكد؟</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-bs-hidden="true"
                        style="border: none; background: none;color:#DF2024;font-size: 25px;margin-right: 20px;">&times;</button>
                </div>
                <div class="modal-body">
                    <p>هل تريد حقًا حذف هذه السجلات؟ لا يمكن التراجع عن هذه العملية .</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-danger">حذف</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>

                </div>
            </div>
        </div>
    </div>
    <!-- End Delete Alert-->

    <div class="container-fauld">

        <div class="row">
            <!--Right Side -->
            <x-side-nav />
            <!--End Right Side -->

            <!-- Left Side -->
            <div class="col-9">
                <div class="tab-content" id="buttonsTabContent">
                    <!--All Applications #tab1-->
                    <div class="tab-pane fade show active" id="All-applications" role="tabpanel"
                        aria-labelledby="All-applications-tab">
                        <div class="row mb-2">
                            <div class="col-sm-5 ps-2 search-container">
                                <!--<input class="search"  placeholder="بحث">
                                    <svg id="Research" xmlns="http://www.w3.org/2000/svg" width="26.503" height="26.602" viewBox="0 0 26.503 26.602">
                                    <path id="Vector" d="M25.3,19.712l-2.76-2.827a4.107,4.107,0,0,0-4.533-.76l-1.2-1.2a9.333,9.333,0,1,0-1.88,1.88l1.187,1.187a4,4,0,0,0,.707,4.613l2.827,2.827a4.021,4.021,0,1,0,5.653-5.72ZM13.992,14.059a6.667,6.667,0,1,1,1.45-2.165,6.667,6.667,0,0,1-1.45,2.165Zm9.427,9.427a1.333,1.333,0,0,1-1.893,0L18.7,20.659a1.339,1.339,0,1,1,1.893-1.893l2.827,2.827a1.333,1.333,0,0,1,0,1.893Z" transform="translate(0 0)" fill="#df2024"/>
                                    </svg>-->

                                    <form style="display: contents" action="/partners-search" method="POST" >

                                            <div class="input-group mb-3 search">
                                                <button class="btn btn-outline-secondary btn-icon" type="button"
                                                    id="button-addon2">
                                                    <svg id="Research" xmlns="http://www.w3.org/2000/svg" width="26.503"
                                                        height="26.602" viewBox="0 0 26.503 26.602">
                                                        <path id="Vector"
                                                            d="M25.3,19.712l-2.76-2.827a4.107,4.107,0,0,0-4.533-.76l-1.2-1.2a9.333,9.333,0,1,0-1.88,1.88l1.187,1.187a4,4,0,0,0,.707,4.613l2.827,2.827a4.021,4.021,0,1,0,5.653-5.72ZM13.992,14.059a6.667,6.667,0,1,1,1.45-2.165,6.667,6.667,0,0,1-1.45,2.165Zm9.427,9.427a1.333,1.333,0,0,1-1.893,0L18.7,20.659a1.339,1.339,0,1,1,1.893-1.893l2.827,2.827a1.333,1.333,0,0,1,0,1.893Z"
                                                            transform="translate(0 0)" fill="#b68b25" />
                                                    </svg>
                                                </button>
                                                <input type="text" class="form-control" name="searchValue" placeholder="بحث"
                                                    required aria-label="Recipient's username" aria-describedby="button-addon2">

                                                <button type="submit" class="search-btn">بحث</button>

                                            </div>


                            </div>

                            <div class="col-sm-4 d-flex justify-content-center">
                                <div class="dropdown dropMenuQuestion">
                                    <button class="btn  choose-btn btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        اختر البيانات التي تريد اظهارها
                                    </button>
                                    <ul class="dropdown-menu question-menu-ul"
                                        aria-labelledby="dropdownMenuButton1">
                                        <!--<li><a class="dropdown-item showHideColumn checkColumn" data-columnindex="0">#</a> </li>-->
                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="1">اسم الشريك</a> </li>
                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="2">الفرع التابع له</a> </li>

                                    </ul>
                                </div>
                            </div>
                            @csrf
                        </form>
                            <div class="col-sm-3 d-flex justify-content-end">
                                <div class="num-order">
                                    <button class="approave border-0 w-100 h-100 bg-transparent" data-bs-toggle="modal" data-bs-target="#addPartnerModel"> اضافة شريك</button>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table custom-table" id="AllApplications">

                                <thead>

                                    <tr>
                                        <th scope="col"> اسم الشريك</th>
                                        <th scope="col">الفرع التابع له</th>
                                        <th scope="col" class="dots"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($partners as $user)


                                        <tr>
                                            <td class="clickable pt-39 order-num fw-bold">
                                                {{ $user->name }}
                                            </td>
                                            <td class="clickable pt-39 fw-bold text-wrap">
                                                {{ $user->bank->name }}
                                            </td>


                                            <td class="pt-39">
                                                <div class="dropdown">




                                                            <button class="approave border-0 w-100 h-100 bg-transparent modify-button"  data-bs-toggle="modal" data-attr-id="{{$user->id}}" data-bs-target="#editPartnerModel">
                                                                <svg class="me-1" id="Component_38_17"
                                                                    data-name="Component 38 – 17"
                                                                    xmlns="http://www.w3.org/2000/svg" width="27"
                                                                    height="27" viewBox="0 0 27 27">
                                                                    <g id="Path_12455" data-name="Path 12455" fill="none">
                                                                        <path
                                                                            d="M13.5,0A13.5,13.5,0,1,1,0,13.5,13.5,13.5,0,0,1,13.5,0Z"
                                                                            stroke="none" />
                                                                        <path
                                                                            d="M 13.5 1 C 10.16113090515137 1 7.022100448608398 2.300230026245117 4.661159515380859 4.661159515380859 C 2.300230026245117 7.022100448608398 1 10.16113090515137 1 13.5 C 1 16.83887100219727 2.300230026245117 19.9778995513916 4.661159515380859 22.33882904052734 C 7.022100448608398 24.69976997375488 10.16113090515137 26 13.5 26 C 16.83887100219727 26 19.97789001464844 24.69976997375488 22.33882904052734 22.33882904052734 C 24.69976997375488 19.97789001464844 26 16.83887100219727 26 13.5 C 26 10.16113090515137 24.69976997375488 7.022100448608398 22.33882904052734 4.661159515380859 C 19.9778995513916 2.300230026245117 16.83887100219727 1 13.5 1 M 13.5 0 C 20.95584106445312 0 27 6.044149398803711 27 13.5 C 27 20.95584106445312 20.95584106445312 27 13.5 27 C 6.044149398803711 27 0 20.95584106445312 0 13.5 C 0 6.044149398803711 6.044149398803711 0 13.5 0 Z"
                                                                            stroke="none" fill="#b68b25" />
                                                                    </g>
                                                                    <g id="Group_16660" data-name="Group 16660" transform="translate(3462.684 -808.464)">
                                                                    <g id="edit" transform="translate(-3454.684 814.464)">
                                                                    <path  id="Form_24" data-name="Form 24" d="M2.429,13.9a2.535,2.535,0,0,1-1.687-.746A3.311,3.311,0,0,1,.081,11.24C0,10.431,0,9.415,0,8.073S0,5.717.079,4.908A3.31,3.31,0,0,1,.733,2.99a2.534,2.534,0,0,1,1.688-.747,24.049,24.049,0,0,1,2.785-.089h.014a.511.511,0,0,1,.467.546.507.507,0,0,1-.48.53,24.021,24.021,0,0,0-2.679.083A1.706,1.706,0,0,0,1.4,3.751a2.258,2.258,0,0,0-.384,1.278c-.07.7-.072,1.7-.072,3.044s0,2.34.075,3.043A2.258,2.258,0,0,0,1.41,12.4a1.709,1.709,0,0,0,1.125.438,24.046,24.046,0,0,0,2.672.083,23.891,23.891,0,0,0,2.672-.084A1.71,1.71,0,0,0,9,12.392a2.262,2.262,0,0,0,.388-1.279c.071-.7.075-1.7.075-3.04V8.058a.477.477,0,1,1,.947.015c0,1.34,0,2.354-.082,3.162a3.313,3.313,0,0,1-.659,1.918,2.537,2.537,0,0,1-1.688.748,23.532,23.532,0,0,1-2.778.092H5.064A22.493,22.493,0,0,1,2.429,13.9Zm2.3-4.755a.509.509,0,0,1-.473-.538V7A.579.579,0,0,1,4.4,6.616L10.079.158a.434.434,0,0,1,.67,0l1.42,1.614a.591.591,0,0,1,0,.761L6.488,8.992a.447.447,0,0,1-.335.157Zm.473-1.93v.853h.751L9.745,3.768l-.751-.853ZM9.663,2.153l.751.853.751-.853L10.414,1.3Z" transform="translate(0 0)" fill="#b68b25"/>
                                                                    </g>
                                                                </g>
                                                                </svg>
                                                            </button>

                                                        @if (false)
                                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> تعديل</a>

                                                            <a class="dropdown-item" href="#CloseModal" class="trigger-btn"
                                                                    data-bs-toggle="modal"> <i class="fas fa-trash"></i> حذف</a>
                                                        @endif

                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach



                                </tbody>

                            </table>

                        {{-- <div class="pagination d-flex justify-content-center mt-3">
                            <a href="#" class="pagination-num active">1</a>
                            <a href="#" class="pagination-num">2</a>
                            <a href="#" class="pagination-num">3</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- End All Applications #tab1-->
        </div>
    </div>
    <!-- End Left Side -->

    </div>
    {{-- </div> --}}


    <!--تعيين الشريك-->
    <div class="modal fade" id="addPartnerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form style="display: contents" method="POST" action="/partners" >
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-12 field-name"> الاسم الثلاثي</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" name="name" class="form-control input-name" id="staticEmail" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'الاسم الثلاثي'" placeholder="الاسم الثلاثي">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-12 field-name"> البريد الإلكترونى </label>
                                    <div class="col-md-8 col-12">
                                        <input type="email" name="email" class="form-control input-name" id="staticEmail" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'البريد الإلكترونى '" placeholder="البريد الإلكترونى ">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="notes mb-2 mt-2"> الفرع التابع له</p>
                                <select name="bank_branch_id" id="modal-niceSelect" class="modal-niceSelect">
                                    <option selected value="0">الفرع التابع له</option>
                                    @foreach ($branches as $branch )
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="notes mb-2 mt-2"> الحالة</p>
                                <select name="active" id="modal-niceSelect" class="modal-niceSelect">
                                    <option selected >الحالة</option>
                                    <option value="1">نشط</option>
                                    <option value="0">غير نشط</option>
                                </select>
                            </div>

                        </div>
                </div>
                <div class="row">
                    <div class="modal-footer d-flex justify-content-center">

                        <div class="col-4">
                            <button type="submit" class="save done">اضافة شريك</button>
                        </div>
                        <div class="col-3">

                        </div>
                        <div class="col-4">
                            <button type="button" class="cancel close" data-bs-dismiss="modal">إلغاء</button>
                        </div>
                    </div>
                    @csrf
                </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end popup-->

    <!--تعديل الشريك-->
    <div class="modal fade" id="editPartnerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form style="display: contents" method="POST" id="partnersEdit">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-12 field-name"> الاسم الثلاثي</label>
                                    <div class="col-md-8 col-12">
                                        <input type="text" name="name" class="form-control input-name" id="nameEdit" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'الاسم الثلاثي'" placeholder="الاسم الثلاثي">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-4">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-12 field-name"> البريد الإلكترونى
                                    </label>
                                    <div class="col-md-8 col-12">
                                        <input type="email" name="email" class="form-control input-name" id="typeEdit" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'البريد الإلكترونى'" placeholder="البريد الإلكترونى">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                @method('put')
                                <p class="notes mb-2 mt-2"> الفرع التابع له</p>
                                <select  name="" id="modal-niceSelect" class="modal-niceSelect">
                                    <option  value="1">الفرع التابع له</option>
                                    @foreach ($branches as $branch )
                                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <p class="notes mb-2 mt-2"> الحالة</p>
                                <select name="active" class="acticeEdit" id="modal-niceSelect" class="modal-niceSelect">
                                    <option  >الحالة</option>
                                    <option value="1">نشط</option>
                                    <option value="0">غير نشط</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="modal-footer d-flex justify-content-center">

                            <div class="col-4">
                                <button type="submit" class="save done">حفط</button>
                            </div>
                            <div class="col-3">

                            </div>
                            <div class="col-4">
                                <button type="button" class="cancel close" data-bs-dismiss="modal">إلغاء</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end popup-->
</section>
@include('layouts.footer')
