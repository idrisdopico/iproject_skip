<?php 

//Helper functions


/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
| Set class="active" on active route  
*/

function isActiveRoute($route, $output = "active")
{
    if (Route::getCurrentRoute()->getPath() == $route) return $output;
}
