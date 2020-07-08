<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    public function all_customer(){
        $customers = Customer::latest()->get();

        return response()->json([
            'customers' => $customers
        ], 200);
    }

    public function save_customer(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'photo' => 'required'
        ]);

        $strpos = strpos($request->photo, ';');
        $sub = substr($request->photo, 0, $strpos);
        $ex = explode('/', $sub)[1];
        $name = time().".".$ex;
        $image = Image::make($request->photo)->resize(200, 200);
        $upload_path = public_path()."/uploadimage/";
        $image->save($upload_path.$name);
        
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->photo = $name;
        $customer->save();
    }
}
