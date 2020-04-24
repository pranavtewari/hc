<?php

namespace Dex\Health\Person\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use DateTime;
use diffInSeconds;;
use Illuminate\Support\Facades\Route;
use Dex\Health\Person\Models\Person;



use URL;

use Illuminate\Support\Facades\DB;
use Validator;


use App\Mail\DexopleMailGeneric;
use Storage;
  use Hyn\Tenancy\Environment;



class PersonController extends Controller
{
    
    public function index()
    {


         
    $Person=DB::connection('tenant')->table('Person')
 ->select('name', 'phone','id')
    ->get();
//dd($Person);

    return view('Health::Person_list')->with('person_list',$Person);
   
    }

    public function create()
    {


    $myprofile="";
    $disable='false';
    $users=new user();
    $is_users=0;

   
    $person=new Person;
    
          return view('Health::add_edit_Person')->with('person',$person)->with('disable',$disable)->with('myprofile',$myprofile)->with('is_users',$is_users);
  
    }


  public function store(Request $request,  $pre="" , $post="")
  {

   // dd($request);

    $inputs = $request->all();

//dd($inputs);
    $this->validate($request, [
           
            'name' => 'required',
            'phone'=> 'required|unique:tenant.users,email',
            

            ],
            ['name.required' => 'Name is required' ,
            'phone.required' => 'Phone Field Is Required'
               
             ]);
 
     
    
  if(1==1) //try
  //try
     {

 
    $Person=new Person;
    $users = new User;
 

 


    $Person->name= $request->name?$request->name:NULL;
    $Person->phone= $request->phone?$request->phone:NULL;
    $Person->email= $request->email?$request->email:NULL;
    $Person->is_patient= $request->is_patient?$request->is_patient:0;
    $Person->age= $request->age?$request->age:NULL;
    $Person->gender= $request->gender?$request->gender:NULL;
    $Person->is_smoking= $request->is_smoking?$request->is_smoking:NULL;
    $Person->is_diabetic= $request->is_diabetic?$request->is_diabetic:NULL;
    $Person->is_cardiovascular= $request->is_cardiovascular?$request->is_cardiovascular:NULL;
    $Person->is_cancer= $request->is_cancer?$request->is_cancer:NULL;
    $Person->is_organ_donor= $request->is_organ_donor?$request->is_organ_donor:NULL;
    $Person->is_organ_tranplant= $request->is_organ_tranplant?$request->is_organ_tranplant:NULL;
    $Person->is_travel_abroad= $request->is_travel_abroad?$request->is_travel_abroad:NULL;
    $Person->is_respiratory= $request->is_respiratory?$request->is_respiratory:NULL;
    $Person->status= $request->status?$request->status:NULL;
   

 // if accept not present..no user needs to be created
     if(! isset($request->accept ))
      {
         $Person->user_id = NULL; 
      
       
      }
      else
      {
        
         $users->name=$request->name;
         $users->email=$request->phone;
         $users->password=$request->phone==''?app('hash')->make('123456'):app('hash')->make('0'.$request->phone);

       
         $users->save();

          $Person_role=DB::connection('tenant')->table('roles')->where("machine_name",'Person')->first();

         DB::connection('tenant')->table('user_has_roles')->insert(array(
         array('user_id'=>$users->id,'role_id'=>$Person_role->id)
        ));
       

         } //user role allocation else


      
      
 
    
    $users_lastId = $request->accept == 0? $users->id:NULL;

    $Person->user_id=$users_lastId;

    $Person->save();
  
      return redirect()->route('person.index');
      
        
  
   } //try
    
     // catch (\Exception $e)
     //  {
     //          return \Redirect::back()->withInput()->withErrors($e->getMessage()); 
     //  }
   
 }



public function edit($id)
   {


   
} 



  public static function setfieldvalue($request, $name, $value, $pre="", $post="")
    {
      //if the field is coming in request
   
       
      if(isset($request[$pre.$name.$post]))
      {
        //check if field is not empty
     
        if( empty($request[$pre.$name.$post]))
        {
          //empty  so return NULL
          return NULL;
        }        
        else
        {
          //set the value from request

        return  $request[$pre.$name.$post];
        }

      }
      else
      {
        //field is not coming in request object..so don't change the value in db. push same
        return $value;
      }
  
  }


 public function update(Request $request, $id,$pre="", $post="")
{


  } 

public function ws_show($id)
{



}



public function show($id)
{




}





  public function searchPerson()
    {


     
 } //function



public function editprofile($id)
   {



  $Person=Person::find($id);

  if(!isset($Person))
  {
    return abort(404);

  }


          return view('Health::update_Person_profile')->with('person',$Person);
    
   
} 

}
