<?php

namespace Dex\Health\Survey\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use DateTime;
use diffInSeconds;;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Input;

use Dex\Vocabulary\Controllers\vocabularyController;
use Dex\Health\Person\Controllers\PersonController;
use Dex\Health\Survey\Models\Survey;
use Dex\Health\Survey\Models\PersonHasSymptoms;
use Dex\Health\Disease\Models\Symptom;
use Dex\Health\Person\Models\Person;
use Dex\Roles\Models\User;
use View;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Response;
//use App\Http\Requests;
use URL;

use Illuminate\Support\Facades\DB;
use Validator;

use Storage;
  use Hyn\Tenancy\Environment;



class SurveyController extends Controller
{
    
    public function index()
    {


         
    $Survey=Survey::all();
//dd($Survey);


       if (\Request::header('content-type')=='application/json') 
         {
          return  $Survey;
         }

    


    return view('Health::Survey_list')->with('Survey_list',$Survey);
   
    }

    public function create()
    {




   
     $survey=new Survey;

     //get all Symptoms
$symptoms= Symptom::all();
    $disable='false';

    //dd($symptoms);
       return view('Health::add_edit_Survey')->with('survey',$survey)->with('symptoms',$symptoms)->with('disable',$disable);
  
    }


  public function store(Request $request,  $pre="" , $post="")
  {

 //  dd(json_encode($request->all()));
 $this->validate($request, [
           
            'name' => 'required',
            'phone'=> 'required',
            

            ],
            ['name.required' => 'Name is required. Try not using Enter button' ,
            'phone.required' => 'Phone Field Is Required'
               
             ]);

     //Create a Person
 if(!isset($request->person_id ))
      {
$Person= new Person;

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
   



    $Person->user_id=NULL;//$users_lastId;

    $Person->save();


  }
 
 // Create a Survey ID
  $survey=new Survey;
  $survey->person_id= $Person->id;
  $survey->disease_id= NULL;
 $survey_status_no_disease=DB::connection('tenant')->table('vocabulary_term_list')->where("meta",'survey_status_no_disease')->get()->first();

 $survey->status=$survey_status_no_disease->tid;
  $survey->save();

  
 //Record all Symptoms


for ($i=0; $i<count($request->symptom_id) ; $i++)
 {
      //if symptom was recorded, then capture info
      if($request->symptom_value[$i]==1)
      {
      $PersonHasSymptoms= new PersonHasSymptoms;
      $PersonHasSymptoms->survey_id= $survey->id;
      $PersonHasSymptoms->symptom_id= $request->symptom_id[$i];
      $PersonHasSymptoms->person_id= $Person->id;

      //if symptom as a data to be recorded, capture it
      if(isset($request['symptom_record'.$request->symptom_id[$i]]))
    {
       $PersonHasSymptoms->value= $request['symptom_record'.$request->symptom_id[$i]];
    }
    else
    {
      $PersonHasSymptoms->value=NULL;
    }

    $PersonHasSymptoms->save();
   }



    } //for



//Return Symptoms
 $PersonHasSymptoms_return=DB::connection('tenant')->table('hc_PersonHasSymptoms')
  ->leftjoin('hc_Symptom','hc_Symptom.id','=','hc_PersonHasSymptoms.symptom_id')->where('hc_PersonHasSymptoms.survey_id',$survey->id)->select('hc_Symptom.name as name','hc_Symptom.icon as icon','hc_PersonHasSymptoms.*')->get();
//dd($PersonHasSymptoms_return);
 $return_val= array();
$return_val['risk']=  $risk;
$return_val['person']= $Person;
$return_val['survey']= $survey;
$return_val['symptoms']=  $PersonHasSymptoms_return;

   //if (\Request::header('content-type')=='application/json') 
   if (isset($request->json)) 
         {
return json_encode($return_val);
}

 return view('Health::Survey_result')->with('person',$Person)->with('risk',$risk)->with('survey',$survey)->with('symptoms',$PersonHasSymptoms_return);

   
 }




public function surveythankyou()
{
   return view('Health::Survey_Thank_You');

}

}
