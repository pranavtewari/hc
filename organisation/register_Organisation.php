@extends('front-layout')

@section('header-section')
<title>Register Organisation | Health Checker</title> 
<meta name="Description" content="Register to get started at Health Checker, an tool for Symptom Analysis"> 


<meta property="og:title" content="Register Organisation | Health Checker"> 
<meta property="og:description" content="Register Organisation to get started at Health Checker, an tool for Symptom Analysis">
@stop

@section('body-section')

@php



@endphp
<style type="text/css">
    
    form > div[class*='col-']:not(:last-child), form > .row > div[class*='col-']:not(:last-child) {
    margin-bottom: 0em;
}
</style>
 <div class="main-container">
            
            <section class=" bg--secondary" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1" style="height: 500px;padding-top: 2em;padding-bottom: 2em;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="boxed boxed--border">                                

@if($errors->any())
   <ul class="alert alert-danger" style="background:rgba(36,31,92,0.8);color:white;">
      @foreach ($errors->all() as $error)
           <li >{{ $error }}</li>
       @endforeach
    </ul>
@endif 

{!! Form::open(['route' => ['register-organisation'], 'method' => 'POST','id'=>'form_validation']) !!}




                                   <!--  <form class="text-left form-email" data-success="Please Wait...Rolling your SalesApt." method="POST" data-error="Please fill in all fields correctly."  data-recaptcha-theme="light"> -->
                                       <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <span>Organisation Name</span>
                                            <input type="text" name="name" required class="validate-required" value="{{old('name','')}}" />
                                        </div>
                                         <div class="col-lg-3"></div>
                                         
                                             <div class="col-lg-12"></div>
                                           <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <span>Phone</span>
                                            <input type="number" name="user_phone" min="1000000000" max="999999999999"required class="validate-required validate-number"value="{{old('phone','')}}" />
                                        </div>
                                           <div class="col-lg-3"></div>
                                               <div class="col-lg-12"></div>
                                           <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <span>Password</span>
                                            <input type="password" name="user_password" required class="validate-required" value="{{old('user_password','')}}" />
                                        </div>
                                          <div class="col-lg-3"></div>
                                       
                                        <div class="col-lg-12 text-center">
                                            <br/>
                                            <h5>Package</h5>
                                        </div>

                                         <div class="col-lg-3"></div>
                                               <div class="col-lg-12"></div>
                                           <div class="col-lg-3"></div>
                                       
                                           <div class="col-lg-3"></div>
                                      
                                      
                                      
                                        <div class="col-lg-6 boxed--border">

                                          
                                            <button type="submit" class="btn btn--primary type--uppercase" style="margin-top: 5px;">Register</button>
                                        </div>

                                        <div class="col-lg-3"></div>
                                    </form>
                                </div>
                            </div>
                            <!--end of row-->
                        </div>
                    </div>
                    <!--end of row-->
                  </section>
                </div>
                <!--end of container-->
@endsection
