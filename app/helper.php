<?php

use Illuminate\Support\Facades\Auth;

function role($role){
    if ($role === 'admin'){
        return auth()->guard('admin')->user()->isAdmin == true;
    } else {
        return auth()->guard('admin')->user()->isAdmin == false;
    }
    
}

function roleController($role){
    if ($role === 'admin'){
        return Auth::guard('admin')->user()->isAdmin == true;
    } else {
        return Auth::guard('admin')->user()->isAdmin == false;
    }
    
}



?>