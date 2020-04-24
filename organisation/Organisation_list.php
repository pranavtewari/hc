@extends('master-layout')

@section('body-section')

   
        <div class="container-fluid">            
           
            
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        
                         <div class="header">
                            <h2>
                                  Organisation LIST
                                <small>List of organisation</small>
                            </h2>

<button type="link" class="btn btn-primary waves-effect waves-circle waves-float" onclick="location.href='{{route('organisation.create')}}';"><i class="material-icons">add</i> Add organisation</button>
                        </div>
                        
                        <div class="body">
                            <div class="table-responsive">
                  

<table class="table table-bordered table-striped table-hover dataTable js-exportable">

<thead>
<tr>
                            
 
<th>Name</th> 
<th>Phone</th> 
<th>Edit</th>     
</tr>
</thead>

<tbody>
@foreach($organisation_list as $organisation)
     <tr>

        <td>{{$organisation->name}}</td>
        <td>{{$organisation->phone}}</td>
      

            <td><a href="{{route('organisation.edit',$organisation->id)}}"><i class="material-icons">edit</i></a></td>
     </tr>                         
@endforeach
</tbody>
</table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>        

 <!-- Custom Js -->
   
  
@stop


@section('js-section')

<script type="text/javascript">

   $(function () {

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
});
</script>

@stop


