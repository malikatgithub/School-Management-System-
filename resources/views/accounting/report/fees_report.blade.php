@extends('layouts.css_main')

@section('body')

@include('layouts.account_Nav')

@include('layouts.top-menu')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-11 text-right font-weight-light">

                {{-- Start of card Div  --}}

                <div class="card">

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

                   {{-- Sesion Error and Success handeler --}}

                    <div class="card-header border-top1 p-3">
                        <h6 class="font-weight-bold"> 
                                <i class="fas fa-file-alt text-primary"></i>&nbsp;تقارير الاقساط المدرسية للعام الدراسي الحالي

                        </h6>
                        
                    </div>
                        <br>
                        <div class="container">  
                            <div class="row">
                                <div class="col-md-12">
                
                                    <div class="form-group">
                            
                                        <h6>
                                            <label for="formGroupExampleInput" class="font-weight-bold"> <i class="fas fa-search fa-1x ml-1" ></i>تقرير عن دفعيات طالب</label>
                                        </h6>
                                        
                                        @include('accounting.report.student_report_search')
                                    </div>
                                </div>
                           
                                </div>
                             </div>
                </div>

                <div class="card mt-3">          
                        <div class="card-header border-top1 p-3">
                                <h6 class="font-weight-bold"> 
                                        <i class="fas fa-file-alt text-primary"></i>&nbsp; تقرير دفعيات رسوم دراسية للعام الدراسي الحالي
        
                                </h6>
                                
                        </div>
                        <div class="container pt-2">  
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @include('accounting.report.dynamic_dependent_fees_report')
                                    </div>
                                </div>  
                            </div>
                        </div>
                </div>


                <div class="card mt-3 mb-3">          
                        <div class="card-header border-top1 p-3">
                                <h6 class="font-weight-bold"> 
                                        <i class="fas fa-file-alt text-primary"></i>&nbsp; تقرير بعدم دفعيات رسوم دراسية للعام الدراسي الحالي
                                </h6>
                                
                        </div>
                        <div class="container pt-2">  
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        @include('accounting.report.dynamic_dependent_fees_report_no_pay')
                                    </div>
                                </div>  
                            </div>
                        </div>
                </div>
              
              

                {{-- End of Start of card Div  --}}


                    
                

            </div>
        </div>
    </div>


 
   
@endsection
