<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\customer;

class loyaltyController extends Controller
{
   public function getCustomerName(){
    	
        
		$customers = \DB::select("select name,cus_id from loyalty");
	
		//return $customers;
    	return view('CustomerLoyalty',compact('customers'));


   	//echo "test";
    }

    public function addloyalty(Request $request){
             
        // $name = $request->input('cusname');
        $id = $request->input('cusname');
        $fromm = $request->input('from');
        $to = $request->input('to');
       	$discount = $request->input('discount');

        DB::statement(
            "INSERT INTO loyalty(cusid,discount,fromDate,toDate)
            VALUES ('$id','$discount','$fromm','$to')"); 


        return redirect('CustomerLoyalty');
    }

    public function getLoyalty(){


        $customer= \DB::select("select * from ");



        return view('CustomerLoyalty',compact('customer'));
    }
}
