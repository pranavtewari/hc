<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How are you feeling today</title>
     <!-- bootstrap links starts from here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
     crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
     crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
     crossorigin="anonymous"></script>
  <!-- bootstrap links end here -->
  <!-- font awesome link -->
  <script src="https://use.fontawesome.com/ed3ceec078.js"></script>
</head>


<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

.buttons-holder {
 
padding-left: 48%;
  
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

<!-- Bootstrap Date Picker CSS -->
<link href="{{URL::to('theme/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>

  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />




<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
         <div class="header">

   @if($survey->id!='')
   
         <h2>UPDATE survey : {{$survey->name}}</h2>
         
         
         
   
   @else
 

 <br/>
    <h2 class="text-center">How are you feeling today</h2>
    
  
    @endif
                            

                        </div>

        <div class="body">

@if (isset($errors))
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endif



  @if($survey->id!='')

 {!! Form::model($survey, ['route' => ['survey.update', $survey->id], 'method' => 'PUT','id'=>'survey_form_validation','enctype'=>"multipart/form-data"]) !!}
 @else

  {!! Form::open(['route' => ['survey.store'], 'method' => 'POST','id'=>'survey_form_validation','enctype'=>"multipart/form-data"]) !!}
  @endif

{!!csrf_field()!!}



            
             <fieldset id="myFieldset">




  <!-- One "tab" for each step in the form: -->





@php 
$count= count($symptoms)+1;
@endphp
@for($sym_count=0;$sym_count< count($symptoms); $sym_count++)
  <div class="tab">
<div class="container">
      <p class="text-center mt-4" style="font-weight: 500;">Are you having {{$symptoms[$sym_count]->name}} today?</p>
      <div class="text-center">
        <input type="hidden" name="symptom_id[]" value="{{$symptoms[$sym_count]->id}}"> 

        <input type="hidden" name="symptom_value[]" value="0" id="symptom_id{{$symptoms[$sym_count]->id}}">
        <script>
          function setsymptom_id{{$symptoms[$sym_count]->id}} (val) 
          {
            // body...
          symptom{{$symptoms[$sym_count]->id}}=  document.getElementById("symptom_id{{$symptoms[$sym_count]->id}}");

         symptom{{$symptoms[$sym_count]->id}}.value = val; 
@if($symptoms[$sym_count]->InputValue ==0)
          if(val==0)
          {
         nextPrev(2);
          }
          else
          {
             nextPrev(1);
          }
@else
 nextPrev(1);
         @endif
          }

        </script>
        <a href="#" onclick="setsymptom_id{{$symptoms[$sym_count]->id}}(1);return false;" ><i class="fa fa-check fa-4x" style="color: #00ff00;"></i></a>
        <a href="#" onclick="setsymptom_id{{$symptoms[$sym_count]->id}}(0);return false;"><i class="fa fa-times fa-4x" style="color: #ff0000;"></i></a>
      </div>
<br/>
        <p class="text-center">{{$symptoms[$sym_count]->description}}</p>




    </div>
  </div>


  @if($symptoms[$sym_count]->InputValue ==0)
  @php 
$count++;
@endphp
      <div class="tab">
<div class="container">
      <p class="text-center mt-4" style="font-weight: 500;">Please record your {{$symptoms[$sym_count]->name}}</p>
      <div class="text-center">
      
        @if($symptoms[$sym_count]->name=='Fever')

        <style>
.slidecontainer {
  width: 80%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>

<div class="slidecontainer">
  <input type="range" min="97" max="107" value="98.6" step="0.1" class="slider" id="FeverRange"> 
  <p>Fever: <span id="fever"></span>&#8457</p>
</div>


        <input class="px-md-5" type="hidden"  name="symptom_record{{$symptoms[$sym_count]->id}}" id="symptom_record{{$symptoms[$sym_count]->id}}">

        <script>
var slider = document.getElementById("FeverRange");
var output = document.getElementById("fever");
var outputhiddenfever = document.getElementById("symptom_record{{$symptoms[$sym_count]->id}}");
output.innerHTML = slider.value;
outputhiddenfever.value=slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  outputhiddenfever.value=slider.value;
}
</script>
        @else
         <input class="px-md-5" type="text" name="symptom_record{{$symptoms[$sym_count]->id}}" id="symptom_record{{$symptoms[$sym_count]->id}}">
        @endif
       
        <script>
          function setsymptom_record{{$symptoms[$sym_count]->id}} () 
          {
         

         nextPrev(1);
          }

        </script>
        <a href="#" onclick="setsymptom_id{{$symptoms[$sym_count]->id}}();return false;" ><i class="fa fa-ok fa-4x" style="color: #00ff00;"></i></a>
      </div>
<br/>
       <div class="buttons-holder">
     <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
<br/>
       
    </div>
  </div>

  @endif
@endfor

   <div class="tab">
    
    <p class="px-md-5"><input placeholder="Please Enter Your Name"  required name="name"></p>
    <p class="px-md-5"><input placeholder="Your Mobile Number" type="number" required min="1000000000" max="9999999999" name="phone"></p>
    <p class="px-md-5"><input placeholder="Your Age"  type="number" name="age" required min="0" max="120" ></p>

        <p class="px-md-5"> <label for="tandc"><input id="tandc" type="checkbox" style="width: auto;"/>  I Agree to <a href="/terms-&-conditions" target="_blank">Terms & Conditions</a> & <a href="/privacy" target="_blank">Privacy Policy</a></label> </p>
<div class="buttons-holder">
<button class="btn btn-primary waves-effect formvalidation" disabled id="submit"  type="submit">Submit</button> 
</div>

  </div>

<script>

  $(document).ready(function () {
    $('#tandc').click(function () {
      $('#submit').prop("disabled", !$("#tandc").prop("checked"));
    })
  });


</script>
<!--   <div class="tab">

<div class="container">
      <p class="text-center mt-4" style="font-weight: 500;">Do you have Temperature today?</p>
      <div class="text-center">
        <a href="#"><i class="fa fa-check fa-4x" style="color: #00ff00;"></i></a>
        <a href="#"><i class="fa fa-times fa-4x" style="color: #ff0000;"></i></a>
      </div>
    </div>

</div> -->
 <!--  <div class="tab">
<div class="container">
      <p class="text-center mt-4" style="font-weight: 500;">Do you have Cough today?</p>
      <div class="text-center">
        <a href="#"><i class="fa fa-check fa-4x" style="color: #00ff00;"></i></a>
        <a href="#"><i class="fa fa-times fa-4x" style="color: #ff0000;"></i></a>
      </div>
    </div>
  </div>

  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div> -->



  <div style="overflow:auto; display:none">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>



  <div style="text-align:center;margin-top:40px; display: none">

    @for($i=0; $i<$count ; $i++)
    <span class="step"></span>
    @endfor
   
  </div>


<hr/>


<!-- <div class="container">
      <p class="text-center mt-4" style="font-size: 12px;font-weight: 500;"> Disclaimer:This tool is not a substitute for common prudence, medical diagnosis, or other therapeutic and epidemiological measures necessary to combat COVID-19.
</p></p>
   </div> -->



      </fieldset>  
<!--body end -->
</div> 
</div>
</div>
</div>



@if($disable=='true')

<script>
document.getElementById('myFieldset').disabled='true'; 
</script>   

@endif

<script type="text/javascript">

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



<!-- Moment Plugin Js -->
<script src="{{URL::to('theme/admin/plugins/momentjs/moment.js')}}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{URL::to('theme/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>





