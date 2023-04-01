<?php

use Illuminate\Support\Facades\Auth;

// function role($role){
//     if ($role === 'admin'){
//         return auth()->getDefaultDriver() == true;
//     } else {
//         return auth()->getDefaultDriver() == false;
//     }

// }

function roleController($role){
    return Auth::getDefaultDriver() == $role;
}

?>
