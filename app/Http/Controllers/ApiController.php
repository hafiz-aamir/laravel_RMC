<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Session;
use DB;
use Carbon\Carbon;
use DateTime;
use DatePeriod;
use DateInterval;

use Mail;
use Auth;
use Hash;
use App\Models\Loye;


class ApiController extends Controller 
{
   
   
    public function del_wp_users()
    { 
       
       
           $del_wp_users = DB::table('wp_users')->delete();
           
           
           if($del_wp_users)
           {
               
               
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_users has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           

    }




    public function del_wp_coaches()
    { 
       
       
           $del_wp_coaches = DB::table('wp_coaches')->delete();
           
           
           if($del_wp_coaches)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_coaches has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }

    
    
    public function del_wp_schools()
    { 
       
       
           $del_wp_schools = DB::table('wp_schools')->delete();
           
           
           if($del_wp_schools)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_schools has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }


    public function del_rates()
    { 
       
       
           $del_rates = DB::table('rates')->delete();
           
           
           if($del_rates)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'rates has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }



    public function del_wp_sports()
    { 
       
       
           $del_wp_sports = DB::table('wp_sports')->delete();
           
           
           if($del_wp_sports)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_sports has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }

    


    public function del_wp_gender()
    { 
       
       
           $del_wp_gender = DB::table('wp_gender')->delete();
           
           
           if($del_wp_gender)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_gender has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }
    


    public function del_wp_conference()
    { 
       
       
           $del_wp_conference = DB::table('wp_conference')->delete();
           
           
           if($del_wp_conference)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_conference has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }


    
    public function del_wp_submit_corrections()
    { 
       
       
           $del_wp_submit_corrections = DB::table('wp_submit_corrections')->delete();
           
           
           if($del_wp_submit_corrections)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'wp_submit_corrections has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }

    
    
    public function del_users()
    { 
       
       
           $del_users = DB::table('users')->delete();
           
           
           if($del_users)
           {
                
                return response()->json([
                
                    'status' => 1,
                    'message' => 'users has been deleted',
                
                ]);
               
               
           }
           else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Data alrady has been deleted',
                
                ]);

            }
           
           
    }


    
    public function base_url($url_status = "")
    { 
       
       
           $update_base_url = DB::table('base_urls')->where('id', '1')->update(['status' => $url_status]);
           
           if($update_base_url)
           {
            
                $get_baseurl = DB::table('base_urls')->where('id', '1')->first();

                return response()->json([
                
                    'status' => 1,
                    'message' => 'base_url status has been changed',
                    'base_url_status' => $get_baseurl,

                ]);
               
               
           }else{

                return response()->json([
                    
                    'status' => 0,
                    'message' => 'Something went wrong',
                
                ]);

           }
           
           
           
    }


    

    
}
