<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id){   
        // variables and assign the values
        $id = $request->id;
        $name = 'Donald Trump';
        $age = '75';

        // cookie set application -> cookie
        $cookie_name = "access_token";
        $cookie_value = "123-XYZ";
        $cookie_expiry = time()+(160);
        $cookie_path = "/";
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;
        $cookie_httponly = true;
        
        $cookie=setcookie($cookie_name,$cookie_value,$cookie_expiry,$cookie_path,$cookie_domain,$cookie_secure,$cookie_httponly);
        
        // variables in $data variable as associative array with values
        $data = [
            'token' => $cookie,
            'id'    => $id,
            'name'  => $name,
            'age'   => $age
        ];
        
        //Set your cookie variables

        return response()->json($data, 200);
    }
}
