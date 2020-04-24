<!DOCTYPE html>
<html>
<head>
	<title>Your Diagnosis</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap links starts from here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<body>
	<div class="container">
		<div class="h2 text-center text-primary mt-5">{{$person->name}}</div>
		<div class="text-center mt-4"><i class="fa fa-user fa-5x"></i></div>
		<div class="h3 text-center text-primary mt-4">Your Diagnosis Today</div>
		<div class="container text-center">
			<table class="table">

				<tbody>

					@foreach($symptoms as $symptom)
					<tr>
						<th>{{$symptom->name}}</th>

						@if($symptom->value)
						<th style="color: #ff0000;">{{$symptom->value}}</th>
						@else
						<th><i class="{{$symptom->icon?$symptom->icon:''}}" style="color: #0f82ff;"></i></th>
						@endif
					</tr>

					@endforeach
					
				</tbody>
			</table>
		</div>
		
		<div class="h3 text-center mt-4" style="color:{{$risk=='High'?'#ff0000':'#00FF00'}};">Your Risk for COVID-19: {{$risk}}</div>

		@if($risk!='Low')
		<center class="mt-4"><a href="/profile/{{$person->id}}/edit"><button class="btn btn-danger mx-5">Proceed for more info</button></a></center>
		

		@endif

		<div class="container">
      <p class="text-center mt-4" style="font-size: 14px;font-weight: 500;"> Disclaimer:This tool evaluates your risk and is not a substitute for common prudence, medical diagnosis, or other therapeutic and epidemiological measures necessary to combat COVID-19.
</p></p>
   </div>


	
	</div>

</body>
</html>