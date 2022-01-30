@extends('layouts.css_main')

@section('body')

@include('layouts.account_Nav')

@include('layouts.top-menu')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-right">

                 {{-- Start of card Div  --}}

                 <div class="card border-top-0">
                      {{-- Sesion Error and Success handeler --}}

                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                <i class="fas fa-check-square fa-1x"></i> &nbsp; {{ session('status') }}
                            </div>
                            @endif

                            @if (Session::has('delete'))

                            <div class="alert alert-danger">
                                <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{Session::get('delete')}}
                            </div>  

                            {{Session::forget('delete')}}
                            @endif


                            @if (Session::has('error'))

                            <div class="alert alert-danger bg-danger text-white">
                                <i class="fas fa-exclamation-triangle fa-1x"></i> &nbsp;  {{Session::get('error')}}
                            </div>  

                            {{Session::forget('error')}}
                            @endif

                            @if (Session::has('success'))

                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>  

                            {{Session::forget('success')}}
                            @endif

                            @if(isset($salary))
                            {{-- Sesion Error and Success handeler --}}

                            <div class="card-header border-top1">
                                <span class=" fa-1x font-weight-bold text-dark"> <i class="fas fa-money-bill-alt text-info"></i>  إضافة بيانات صرف مرتب شهري </span>
                                </div>
                                    <br>
                                    <div class="container">
                                {{-- Start of form  --}}
                                    <form action="{{route('salary.store')}}" method="POST" enctype="multipart/form-data">
                                        {{@csrf_field()}}
                                        <div class="card flex-row flex-wrap">

                                        

                                        <div class="card-footer w-100 text-muted border-top1">
                                            <h6 class=" font-weight-bold text-dark"> البيانات : </h6>
                                        </div>

                            
                                        <div class="card-header border-0 flex-column w-100" >                                    

                                            
                                    {{-- income information Section --}}

                                    {{-- Row of income information --}}


                                    <div class="row ">

                                            <div class="col-md-6">
                                                    <label for="validationDefault01">رقم المنصرف</label>
                                                    <input  class="form-control" id="validationDefault01" placeholder="auto_generate" readonly required name="exp_no">
                                            </div>

                                            <div class="col-md-6">
                                                    <label for="validationDefault01">التاريخ</label>
                                                    <input type="date" class="form-control" id="validationDefault01" placeholder=""  required  name="date" value="{{ Carbon\Carbon::now()->toDateString() }}">
                                            </div>

                                         
                                    </div>
            
                                    <div class="row mt-3">

                                            <div class="col-md-6">
                                                    <label for="validationDefault01">القيمة</label>
                                                    <input type="number" class="form-control text-white font-weight-bold border-0 bg-danger" id="validationDefault01" placeholder="" required name="amount" readonly value="{{ $info->salary }}">
                                            </div>

                                            <div class="col-md-6">
                                                    <label for="validationDefault01">مرتب لصالح</label>
                                                    <input type="text" class="form-control text-danger font-weight-bold " id="validationDefault01" placeholder=""  required name="expense_owner" value="{{ $info->name }}" readonly>
                                                    @if (isset($teacher_salary))
                                                        <input type="hidden" class="form-control text-danger font-weight-bold " id="validationDefault01" placeholder=""  required name="teacher_id" value="{{ $info->id }}" readonly>
                                                    @else
                                                        <input type="hidden" class="form-control text-danger font-weight-bold " id="validationDefault01" placeholder=""  required name="employee_id" value="{{ $info->id }}" readonly>
                                                    @endif
                                            </div>
                                            
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label for="validationDefault01">ملاحظات</label>
                                            <input type="text" class="form-control text-muted" id="validationDefault01" placeholder=""  required name="expense_note" value="عبارة عن مرتب شهري" readonly>
                                            <input type="hidden" class="form-control text-muted" id="validationDefault01" placeholder=""  required name="salary">
                                        </div>
                                    </div>
                                    
                                        {{-- End of Row of income information --}}
                                    
                                            
                                        </div> 
                                    </div>

                    
                                            <br>
                                            
                                            <center>
                                                <button type="submit" class="btn btn-success btn-sm"  onclick='return confirm("صرف المرتب ؟")'> صرف المرتب </button>
                                            </center>
                                        
                                        </form>
                                        {{-- End of form of student  --}}

                                        <br>
                                        <br>
                                </div>

                                @else

                                {{-- Sesion Error and Success handeler --}}

                                    <div class="card-header border-top1">
                                        <span class=" fa-1x font-weight-bold text-dark"> <i class="fas fa-money-bill-alt text-info"></i>  إضافة بيانات منصرف </span>
                                        </div>
                                            <br>
                                            <div class="container">
                                        {{-- Start of form  --}}
                                            <form action="{{route('expense.store')}}" method="POST" enctype="multipart/form-data">
                                                {{@csrf_field()}}
                                                <div class="card flex-row flex-wrap">

                                                

                                        <div class="card-footer w-100 text-muted border-top1">
                                            <h6 class=" font-weight-bold text-dark"> البيانات : </h6>
                                        </div>

                            
                                        <div class="card-header border-0 flex-column w-100" >                                    

                                            
                                    {{-- income information Section --}}

                                    {{-- Row of income information --}}


                                        <div class="row ">

                                                <div class="col-md-6">
                                                        <label for="validationDefault01">رقم المنصرف<span class="required">*</span></label>
                                                        <input  class="form-control" id="validationDefault01" placeholder="auto_generate" readonly required name="exp_no">
                                                </div>

                                                <div class="col-md-6">
                                                        <label for="validationDefault01">التاريخ <span class="required">*</span></label>
                                                        <input type="date" class="form-control" id="validationDefault01" placeholder=""  required  name="date">
                                                </div>

                                            
                                        </div>
            
                                        <div class="row mt-3">

                                                <div class="col-md-6">
                                                        <label for="validationDefault01">القيمة <span class="required">*</span></label>
                                                        <input type="number" class="form-control" id="validationDefault01" placeholder="" value="" required name="amount" >
                                                </div>

                                                <div class="col-md-6">
                                                        <label for="validationDefault01">منصرف لصالح <span class="required">*</span> </label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="expense_owner" value="">
                                                </div>
                                                
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label for="validationDefault01">ملاحظات <span class="required">*</span></label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="منصرف عبارة عن ..." name="expense_note" required></textarea>
                                            </div>
                                        </div>
                                        
                                            {{-- End of Row of income information --}}
                                        
                                                
                                            </div> 
                                        </div>

                        
                                                <br>
                                                
                                                <center>
                                                    <button type="submit" class="btn btn-success"  onclick='return confirm("حفظ ؟")'>حفظ البيانات</button>
                                                </center>
                                            
                                            </form>
                                            {{-- End of form of student  --}}

                                            <br>
                                            <br>
                                    </div>


                            @endif

                
                        
    
    
                    </div>
    
                    {{-- End of Start of card Div  --}}

            </div>
        </div>
    </div>

   
@endsection
