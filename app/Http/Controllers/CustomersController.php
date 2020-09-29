<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
    	$customers = [
          'John Doe',
          'Lynsey Bwisa',
          'Aimie Matagaro',
          'Jeff Mwangi',
        ];

    return view('internals.customers',[
    'customers' => $customers,
]);
    
    }

}
