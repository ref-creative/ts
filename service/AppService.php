<?php

require("App/Config.php");


$_PATH = [






/*
|--------------------------------------------------------------------------
| Config files
|--------------------------------------------------------------------------
|
|
*/

"Session" => "lib/Sessions/Session",
"DB" => "lib/Build/Queries/DbQuery",
"DB2" => "Inc/db2",
"Request" => AppPath."Request",
"Error" => AppPath."/Errors/Error",

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
|
|
*/


"Controller" => ControllerPath."Controller",
"HomeController" => ControllerPath."HomeController",
"TicketController" => ControllerPath."TicketController",
"UserController" => ControllerPath."UserController",



/*
|--------------------------------------------------------------------------
| Models
|--------------------------------------------------------------------------
|
|
*/

"UserModel" => ModelPath."User",

/*
|--------------------------------------------------------------------------
| Route
|--------------------------------------------------------------------------
|
|
*/

"RouteService" => RoutePath.'routeService'

];


bind($_PATH);



