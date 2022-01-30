@extends('layouts.css_main')

@section('body')

@include('layouts.busNav')

@include('layouts.top-menu')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-right">

                {{-- Start of card Div  --}}

                <div class="card mb-3">

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{ session('status') }} 
                        </div>
                        @endif

                        @if (Session::has('success'))

                        <div class="alert alert-success">
                            <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{Session::get('success')}}
                        </div>  

                        {{Session::forget('success')}}
                        @endif


                        @if (Session::has('delete'))

                        <div class="alert alert-danger">
                            <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{Session::get('delete')}}
                        </div>  

                        {{Session::forget('delete')}}
                        @endif

                    <div class="card-header border-top1">
                        <h6 class="font-weight-bold"> 
                            
                                <i class="fas fa-list-ul text-muted"></i>&nbsp; بيانات التراحيل المحذوفة
    
                        </h6>
                        
                    </div>
                </div>      
                        <br>
                        <div class="container mt-5">  
                            <div class="row">
                                <div class="col-md-12">
                                    <form action='#'>
                                                <div class="form-group">
                                        
                                                    <h6>
                                                        <label for="formGroupExampleInput"> <i class="fas fa-search fa-1x ml-1" ></i>  أدخل الإسم للبحث</label>
                                                    </h6>
                                                    
                                                    @include('bus.trashed.search_Bus_Trashed')
                                                </div>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                </div> 

                {{-- End of Start of card Div  --}}


                    
                

            </div>
        </div>
    </div>


 
   
@endsection
