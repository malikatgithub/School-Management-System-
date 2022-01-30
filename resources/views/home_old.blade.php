@extends('layouts.main_css')
@extends('layouts.top_nav')

@section('content')
<div class="container-fuild">
        
        <div class="row justify-content-center">
                <div class="col-md-12 text-right" >
                    <div class="card bg-primary text-white p-5 rounded-lg">
        
                        <p class="text-white text-left bottom-0 lead"> ..Welcome </p>


                        <h1 class="display-4 text-center p-5 m-5">
                                Challenge International Schools
                        </h1>

                        {{-- <p class="text-secondary text-left bottom-0"> Accountig Software System - SMS made by: <a href="http://www.privilege.sd" target="_blank" class="text-white font-weight-bold" style="font-size: 11px; letter-spacing:2px"><i class="fab fa-product-hunt text-danger"></i> PRIVILEGE</a></p> --}}
                    </div>
        
        

                </div>
        </div>
</div>

<br>
<br>
<div class="container-fuild mt-2">

    <div class="row justify-content-center mb-5">
        <div class="col-md-12 text-right">
   
                <br>

                <div class="container-fuild pr-5 pl-5 pt-3 pb-3">
                        <div class="row">
                                <div class="col-md-4">
                  
                                    <a href="{{route('students')}}">
                                            <div class="primary card-counter" >
                                                    <i class="fas fa-users fa-6x card-counter-i" style="float:left"></i>
                                                    <span class="count-numbers">01</span>
                                                    <span class="count-name">وحدة سجلات الطلاب</span>
                                            </div>
                                    </a>
                                </div>
                               
                                <div class="col-md-4">
                                        <a href="teachers">
                                                <div class="text-white bg-secondary  card-counter">
                                                        <i class="fas fa-chalkboard-teacher fa-6x card-counter-i" style="float:left"></i>
                                                        <span class="count-numbers">02</span>
                                                        <span class="count-name">وحدة الأساتذة</span>
                                                </div>
                                        </a>    
                                </div>

                                <div class="col-md-4">
                                        <a href="school">
                                                <div class="success card-counter">
                                                        <i class="fas fa-school fa-5x card-counter-i" style="float:left"></i>
                                                        <span class="count-numbers">03</span>
                                                        <span class="count-name">الهيكل المدرسي</span>
                                                </div>
                                        </a>    
                                </div>

                              </div>
                              
                              <br>
                              <br>
                              <div class="row">
                                        <div class="col-md-4">
                                                <a href="exams">
                                                        <div class="info card-counter">
                                                                <i class="fas fa-file-signature fa-5x card-counter-i" style="float:left"></i>
                                                                <span class="count-numbers">04</span>
                                                                <span class="count-name"> وحدة الامتحانات</span>
                                                        </div>
                                                </a>    
                                        </div>
                                        <div class="col-md-4">
                                                <a href="accounting">
                                                        <div class="danger card-counter">
                                                                <i class="fas fa-money-check-alt fa-5x card-counter-i" style="float:left"></i>
                                                                <span class="count-numbers">04</span>
                                                                <span class="count-name"> الإدارة المالية</span>
                                                        </div>
                                                </a>    
                                        </div>  

                                    </div>
                            </div>
                         </div>


            </div>
        </div>
    </div>
</div>
@endsection
