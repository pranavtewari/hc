<?php

namespace Dex\Health\Organisation\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Input;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Response;
//use App\Http\Requests;
use URL;





class OrganisationController extends Controller
{
    
    public function index()
    {


         
    $Organisation=Organisation::select('name','id')
    ->get();
//dd($Organisation);


       if (\Request::header('content-type')=='application/json') 
         {
          return  $Organisation;
         }

    


    return view('Health::Organisation_list')->with('organisation_list',$Organisation);
   
    }




      public function register()
    {

//dd("Org Create");
    $myprofile="";
    $disable='false';
    $users=new user();
    $is_users=0;

   
    $Organisation=new Organisation;
    
           return view('Health::register_Organisation')->with('organisation',$Organisation)->with('disable',$disable)->with('myprofile',$myprofile)->with('is_users',$is_users);
  
    }


  public function store(Request $request,  $pre="" , $post="")
  {

try
     {

 
    $Organisation=new Organisation;
    
    $Organisation->name= $request->name;
    $Organisation->organisation_code= $request->name;
    $Organisation->description= $request->description?$request->description:NULL;


    $Organisation->status= $request->status?$request->status:NULL;



    $Organisation->save();


    



       return redirect()->route('thanks-organisation');

    
  
   } //try
    
     catch (\Exception $e)
       {
               return \Redirect::back()->withInput()->withErrors($e->getMessage()); 
     }
   
 }



public function thanks()
   {

   
return view('Health::thank_you_org');

  }
   


public function search_by_name()
{
  //dd("by name", $_GET['name']);

  $name=$_GET['name'];
     if(strlen($name)>=3)
      {

     


     $Organisation=Organisation
   ->whereRaw('lower(name) like "%' . strtolower($name) . '%"')
  
    ->select('id','name', 'organisation_code')
    ->get();

     return $Organisation;

}
else
{
  return null; 
}
}



}
