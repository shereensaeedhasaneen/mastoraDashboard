@include('layouts.header')
<section class="pt-5 pb-5"
    style="background:  #F7F7F7;">
    <!--Popup-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

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
                            <form action="/loans" method="get" style="display: contents">
                                <div class="col-sm-5 ps-2 search-container">
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
                                                data-columnindex="1">رقم
                                                الطلب</a> </li>
                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="2">تاريخ
                                                التقديم</a> </li>
                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="3">مقدم
                                                الطلب</a> </li>
                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="4">الفرع</a>
                                        </li>

                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                            data-columnindex="5">
                                            الشريك
                                            </a> </li>

                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="6">قيمة
                                                القرض</a> </li>


                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                                data-columnindex="7">المرحلة</a>
                                        </li>

                                        <li><a class="dropdown-item showHideColumn checkColumn"
                                            data-columnindex="8">حالة
                                            الطلب</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                            <div class="col-sm-3 d-flex justify-content-end">
                                <div class="num-order">
                                    <span>{{ count($loans) }}</span>
                                    <svg class="ms-3" xmlns="http://www.w3.org/2000/svg" width="18.574"
                                            height="26" viewBox="0 0 18.574 26">
                                            <g id="Group_16633" data-name="Group 16633" transform="translate(0 0)">
                                                <path id="reports"
                                                    d="M12.065,0,12,0H6.5A32.209,32.209,0,0,0,3.181.1,3.523,3.523,0,0,0,.976.974,3.522,3.522,0,0,0,.1,3.18,31.96,31.96,0,0,0,0,6.5V19.491a32.216,32.216,0,0,0,.094,3.315,3.524,3.524,0,0,0,.877,2.206,3.524,3.524,0,0,0,2.206.88,31.983,31.983,0,0,0,3.319.1h5.42A.889.889,0,0,0,12.05,26a.954.954,0,0,0,.195-.018,4.431,4.431,0,0,0,2.1-.332,8.732,8.732,0,0,0,2.091-1.791,8.7,8.7,0,0,0,1.792-2.1,4.429,4.429,0,0,0,.33-2.091.926.926,0,0,0,.006-.336V6.5a32.16,32.16,0,0,0-.1-3.317,3.522,3.522,0,0,0-.88-2.206A3.53,3.53,0,0,0,15.38.1,30.6,30.6,0,0,0,12.2,0ZM3.386,24.048a1.851,1.851,0,0,1-1.1-.347,1.853,1.853,0,0,1-.345-1.1c-.078-.692-.084-1.721-.084-3.109V6.5c0-1.389.006-2.418.084-3.11a1.856,1.856,0,0,1,.347-1.1,1.849,1.849,0,0,1,1.1-.344c.692-.078,1.721-.083,3.109-.083h5.569l.065,0c1.35,0,2.364.008,3.043.084a1.85,1.85,0,0,1,1.1.347,1.844,1.844,0,0,1,.346,1.1c.079.692.084,1.721.084,3.11V18.563h-4.64a.929.929,0,0,0-.929.928v4.64H6.5C5.107,24.131,4.078,24.126,3.386,24.048Zm9.607-3.629h3.69a1.341,1.341,0,0,1-.118.513,9.4,9.4,0,0,1-1.445,1.615,9.5,9.5,0,0,1-1.611,1.444,1.347,1.347,0,0,1-.516.118h0Zm.928-15.777H4.615A.928.928,0,1,0,4.641,6.5h9.307a.928.928,0,0,0-.013-1.856ZM4.615,8.355a.928.928,0,1,0,.026,1.856h9.307a.928.928,0,0,0-.027-1.856H4.615Zm9.306,3.712H4.615a.928.928,0,1,0,.026,1.856h9.307a.928.928,0,0,0-.013-1.856Z"
                                                    transform="translate(18.574 26) rotate(180)" fill="#b68b25" />
                                                <path id="Op_component_1" data-name="Op component 1"
                                                    d="M65.207,714a.928.928,0,0,1,.026,1.856H55.927A.928.928,0,0,1,55.9,714h9.307Z"
                                                    transform="translate(-51.274 -698.21)" fill="#14172e" />
                                                <path id="Op_component_2" data-name="Op component 2"
                                                    d="M65.207,710a.928.928,0,0,1,.026,1.856H55.927A.928.928,0,0,1,55.9,710h9.307Z"
                                                    transform="translate(-51.274 -697.923)" fill="#14172e" />
                                                <path id="Op_component_3" data-name="Op component 3"
                                                    d="M65.207,718a.928.928,0,1,1,.026,1.856H55.927A.928.928,0,1,1,55.9,718h9.307Z"
                                                    transform="translate(-51.274 -698.498)" fill="#14172e" />
                                                <path id="Op_component_4" data-name="Op component 4"
                                                    d="M57.523,696.986a.889.889,0,0,1,.134.013h5.42a31.972,31.972,0,0,1,3.319.1,3,3,0,0,1,3.083,3.085,32.169,32.169,0,0,1,.094,3.315v12.993a32,32,0,0,1-.1,3.319,3,3,0,0,1-3.085,3.083,32.173,32.173,0,0,1-3.315.094h-5.5l-.065,0a32.066,32.066,0,0,1-3.315-.1,3,3,0,0,1-3.085-3.083,31.991,31.991,0,0,1-.1-3.317V703.651a.928.928,0,0,1,.005-.335,4.424,4.424,0,0,1,.33-2.092,8.714,8.714,0,0,1,1.793-2.1,8.727,8.727,0,0,1,2.092-1.791,4.424,4.424,0,0,1,2.1-.332.916.916,0,0,1,.194-.018Zm5.554,1.869h-4.64v4.64a.928.928,0,0,1-.928.928h-4.64V716.49c0,1.389.005,2.418.083,3.11a1.248,1.248,0,0,0,1.448,1.446c.68.076,1.693.083,3.043.083l.065,0h5.568c1.388,0,2.417-.006,3.109-.083a1.246,1.246,0,0,0,1.448-1.446c.078-.692.083-1.721.083-3.11V703.5c0-1.388-.006-2.417-.083-3.109a1.246,1.246,0,0,0-1.446-1.448c-.692-.078-1.721-.083-3.111-.083Zm-6.5.022a1.357,1.357,0,0,0-.516.118,9.506,9.506,0,0,0-1.611,1.445,9.4,9.4,0,0,0-1.445,1.615,1.346,1.346,0,0,0-.118.513h3.69v-3.69Z"
                                                    transform="translate(-50.999 -696.986)" fill="#14172e" />
                                            </g>
                                        </svg>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table custom-table" id="AllApplications">

                                <thead>

                                    <tr>
                                        <!--<th scope="col">
                                                    <label class="control control--checkbox px-1">
                                                    <input type="checkbox" class="js-check-all" />
                                                    <div class="control__indicator"><span></span></div>
                                                    </label>
                                                </th>-->
                                        <th scope="col">
                                            رقم الطلب</th>
                                        <th scope="col">تاريخ التقديم</th>
                                        <th scope="col">مقدم الطلب</th>
                                        <th scope="col"> الفرع</th>
                                        <th scope="col">الشريك</th>
                                        <th scope="col">قيمة القرض</th>
                                        <th scope="col"> نوع القرض</th>
                                        <th scope="col">حالة الطلب</th>
                                        @if(!isset($_GET['approvalStatus']) || (isset($_GET['approvalStatus']) &&  $_GET['approvalStatus']!= "ASSIGNED")  )
                                            <th scope="col" class="dots"></th>
                                        @endif
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($loans as $loan)


                                    <tr>
                                        <td class="clickable pt-39 order-num fw-bold">
                                            {{ $loan->loan_uniqe_id }}
                                        </td>
                                        <td class="clickable pt-39">{{ $loan->created_at }}</td>
                                        <td class="clickable pt-39 fw-bold text-wrap">
                                            {{ $loan->name }}
                                        </td>
                                        <td class="clickable pt-39">
                                            {{ $loan->bank->name }}
                                        </td>
                                        @if($loan->partner)
                                        <td class="clickable pt-39">
                                            {{ $loan->partner->bank->name }}
                                        </td>
                                        @else
                                        <td class="clickable pt-39">لا يوجد </td>
                                        @endif
                                        <td class="clickable pt-39">{{ $loan->price }} جنيه</td>
                                        @switch($loan->type)
                                        @case(1)
                                        <td class="clickable pt-39 approve"> متجددة</td>

                                        @break
                                        @case( 2)
                                        <td class="clickable pt-39 approve"> صناعي</td>

                                        @break
                                        @case (3)
                                        <td class="clickable pt-39 approve"> زراعي</td>

                                        @break
                                        @case (4)
                                        <td class="clickable pt-39 approve"> منزلي</td>

                                        @break
                                        @case (5)
                                        <td class="clickable pt-39 approve"> خدمات</td>

                                        @break
                                        @case (6)
                                        <td class="clickable pt-39 approve"> تجاري</td>
                                        @break

                                    @endswitch

                                        <td>
                                            @if ($loan->status == 0)
                                            <div class="red">
                                                مرفوض

                                            </div>
                                            @elseif($loan->status < 6) <div class="orange">
                                                قيد الدراسه

                        </div>
                        @else
                        <div class="green">
                            تمت الموافقه

                        </div>
                        @endif

                        </td>


                        <td class="pt-39">
                            <div class="dropdown">
                                <!--<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.442" height="7.043"
                                        viewBox="0 0 29.442 7.043">
                                        <path id="Vector"
                                            d="M14.722,0A3.522,3.522,0,1,0,17.21,1.031,3.522,3.522,0,0,0,14.722,0ZM3.522,0A3.522,3.522,0,1,0,6.01,1.031,3.522,3.522,0,0,0,3.522,0Zm22.4,0A3.522,3.522,0,1,0,28.41,1.031,3.522,3.522,0,0,0,25.922,0Z"
                                            fill="#454545"></path>
                                    </svg>
                                </button>-->

                                <a class="dropdown-item" href="{{ route('loans.show', $loan->id) }}">
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
                                        <g id="eye" transform="translate(7.175 8.743)">
                                            <path id="Form_40" data-name="Form 40"
                                                d="M1.658,7.232A10.855,10.855,0,0,1,.471,5.7a8.059,8.059,0,0,1-.416-.711.53.53,0,0,1,0-.473,8.065,8.065,0,0,1,.416-.711A10.8,10.8,0,0,1,1.658,2.281,6.372,6.372,0,0,1,6.325,0a6.372,6.372,0,0,1,4.667,2.281,10.8,10.8,0,0,1,1.187,1.528,8.065,8.065,0,0,1,.416.711.53.53,0,0,1,0,.473,8.059,8.059,0,0,1-.416.711,10.856,10.856,0,0,1-1.187,1.528A6.373,6.373,0,0,1,6.325,9.513,6.373,6.373,0,0,1,1.658,7.232ZM2.427,3a9.754,9.754,0,0,0-1.07,1.378c-.086.134-.162.259-.229.374.067.115.143.241.229.374a9.757,9.757,0,0,0,1.07,1.379,5.363,5.363,0,0,0,3.9,1.947,5.364,5.364,0,0,0,3.9-1.947,9.785,9.785,0,0,0,1.07-1.379c.086-.133.162-.259.229-.374-.067-.115-.143-.24-.229-.374A9.781,9.781,0,0,0,10.223,3a5.364,5.364,0,0,0-3.9-1.947A5.363,5.363,0,0,0,2.427,3ZM4.217,4.756A2.108,2.108,0,1,1,6.325,6.871,2.111,2.111,0,0,1,4.217,4.756Zm1.054,0A1.054,1.054,0,1,0,6.325,3.7,1.056,1.056,0,0,0,5.271,4.756Z"
                                                transform="translate(0)" fill="#b68b25" />
                                        </g>
                                  </svg>
                                </a>
                                <!--<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                    <a class="dropdown-item" href="{{ route('loans.show', $loan->id) }}">
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
                                            <g id="eye" transform="translate(7.175 8.743)">
                                                <path id="Form_40" data-name="Form 40"
                                                    d="M1.658,7.232A10.855,10.855,0,0,1,.471,5.7a8.059,8.059,0,0,1-.416-.711.53.53,0,0,1,0-.473,8.065,8.065,0,0,1,.416-.711A10.8,10.8,0,0,1,1.658,2.281,6.372,6.372,0,0,1,6.325,0a6.372,6.372,0,0,1,4.667,2.281,10.8,10.8,0,0,1,1.187,1.528,8.065,8.065,0,0,1,.416.711.53.53,0,0,1,0,.473,8.059,8.059,0,0,1-.416.711,10.856,10.856,0,0,1-1.187,1.528A6.373,6.373,0,0,1,6.325,9.513,6.373,6.373,0,0,1,1.658,7.232ZM2.427,3a9.754,9.754,0,0,0-1.07,1.378c-.086.134-.162.259-.229.374.067.115.143.241.229.374a9.757,9.757,0,0,0,1.07,1.379,5.363,5.363,0,0,0,3.9,1.947,5.364,5.364,0,0,0,3.9-1.947,9.785,9.785,0,0,0,1.07-1.379c.086-.133.162-.259.229-.374-.067-.115-.143-.24-.229-.374A9.781,9.781,0,0,0,10.223,3a5.364,5.364,0,0,0-3.9-1.947A5.363,5.363,0,0,0,2.427,3ZM4.217,4.756A2.108,2.108,0,1,1,6.325,6.871,2.111,2.111,0,0,1,4.217,4.756Zm1.054,0A1.054,1.054,0,1,0,6.325,3.7,1.056,1.056,0,0,0,5.271,4.756Z"
                                                    transform="translate(0)" fill="#b68b25" />
                                            </g>
                                      </svg>
                                    </a>
                                </li>
                                    @if (false)
                                    <li><a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> تعديل</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#CloseModal" class="trigger-btn"
                                            data-bs-toggle="modal"> <i class="fas fa-trash"></i> حذف</a></li>
                                    @endif
                                </ul>-->
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
</section>
@include('layouts.footer')
