<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function updateCustomerRecord(Request $request)
    {   
        return view('layout.index');
        $data = $request->all(); 
        
                dd($data); 
    }
}

?>