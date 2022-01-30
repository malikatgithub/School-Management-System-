<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    
    <style>
        @font-face {
            font-family: font;
            src: url("{{asset('public/fonts/Cairo-Regular.ttf')}}");
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- calling some java script files -->
    <script src="{{asset('public/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/js/bootstrap-jquery.js')}}"></script>
    <script src="{{asset('public/js/proper.js')}}"></script>
    <script src="{{asset('public/js/font-awsome.js')}}"></script>
    <script src="{{asset('public/js/plugins.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/sidnav.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/font-awsome.css') }}" rel="stylesheet">

    <title>تقرير رسوم دراسية</title>

    <script type="text/javascript">
        $(document).ready(function () {
            window.print();
            setTimeout("closePrintView()", 3000);
        });
        function closePrintView() {
            document.location.href = "{{ url('fees_report') }}";
        }
    </script> 

</head>

{{-- === AUTO PRINT PAGE 
    
    onload="window.print()" 
    
    --}}

<body style='font-family:font; direction:rtl ' class="text-right mt-5 bg-white">
    <div class="pt-5 container">

        <div class="row">

            <div class="col-md-2">
                <center><img src="{{asset("public/$school_info->logo")}}" alt="" width="150px" height="150px" class="img-reponsive"></center>
            </div>

            <div class="col-md-8">
                <h5 class="text-center text-dark font-weight-bold">{{$school_info->name_arabic}}</h5>
                <h5 class="text-center text-dark font-weight-bold">{{$school_info->name_english}}</h5>
            </div>

            <div class="col-md-2">
                <center><img src="{{asset("public/$school_info->logo")}}" alt="" width="150px" height="150px" class="img-reponsive"></center>
            </div>

        </div>

    </div>
    <div class=" pt-3">
            <div class="alert alert-dark mt-3">
                    <center><h5 class="text-center font-weight-bold">الإدارة المالية</h5> </center>
            </div>
            
        <ul class="m-4"> 
            <li><h6>وحدة الاقساط</h6></li>
            <li><h6>تقرير اقساط</h6></li>
            <li><h6>التاريخ  : {{date('Y-m-d')}}</h6></li>
            <li><h6>العام الدراسي  : {{$academic_year_name}}</h6></li>
        </ul>
        @if (isset($fees_info))
            {{-- VERFY THE EXPENSES FOR SPECIFIC DATE WHERE $EXPENSES_INFO IS NULL = 00 --}}
                @php
                $info = (int) $fees_info    
                @endphp 
                
                @if ($info == 00)
                <div class="alert alert-dark mt-3">
                        <center><h5 class="text-center font-weight-bold">لم يتم دفع أقساط لهذا الفصل</h5> </center>
                </div>
                @endif
            @if (count($fees_info)>0)
                <table class="table table-striped table-bordered text-right" >
                    <br>
                        <thead >
                        <tr class="font-weight-bold">
                            <td>رقم الايصال</td>
                            <td>الرقم الأكاديمي</td>
                            <td>إسم الطالب</td>
                            <td>الفصل الدراسي</td>
                            <td>التاريخ</td>
                            <td>نوع القسط</td>
                            <td>المبلغ الكلي</td>
                            <td>المبلغ المدفوع</td>
                            <td>تخفيض</td>
                            <td>طريقة الدفع</td>
                            <td>ملاحظات</td>
                            </tr>
                        </thead>
                        <tbody class="text-right">
                            
                            @php
                                $total = 0;
                                
                           
                            foreach ($fees_info as $fees){
                            
                                $total = $total+$fees->amount;

                               echo "<tr>
                                    <td>$fees->bill_no</td>
                                    <td>$fees->reg_no</td>";

                                    // RETREVE THE STUDENT NAME

                                    foreach ($student_info as $info)
                                    {
                                        if ($info->reg_no == "$fees->reg_no") {

                                           echo "<td>$info->name</td>";

                                            }
                                            else{
                                                echo "<td>تم مسح الطالب</td>";
                                            }
                                    }

                                    // # RETREVE THE STUDENT NAME

                                echo "  <td>$class->name</td>
                                        <td>$fees->date</td>
                                        <td>$fees_type->name</td>
                                        <td>$fees->amount</td>
                                        <td>$fees->paid</td>
                                        <td>$fees->discount</td>
                                        <td>$fees->paid_method</td>
                                        <td>$fees->fees_note</td>
                                </tr>";
                            }

                            @endphp
                            <tr>
                                <td colspan="6" colspan=" font-weight-bold">المجموع الكلي</td>
                                <td colspan="5">{{$total}}</td>
                            </tr>
                        </tbody>
                </table>

                <div class="p-3">
                    <h6>الإدارة المالية</h6>
                    <h6>___________________________</h6>
                </div>
            @endif
        @else

        @endif
    </div>

    
    
</body>

</html>