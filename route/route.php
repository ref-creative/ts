<?php

/*
|--------------------------------------------------------------------------
| Home Controller
|--------------------------------------------------------------------------
*/
Route::get('home','HomeController','index');
Route::get('about','HomeController','about');

/*
|--------------------------------------------------------------------------
| Ticket Controller
|--------------------------------------------------------------------------
*/

Route::get('tiyatro-bilet-al','TicketController','theatre');
Route::get('konser-bilet-al','TicketController','concert');
Route::get('eventseat','TicketController','eventSeat');
Route::get('check','TicketController','checkTicket');
Route::get('getprice','TicketController','getPrice');
Route::get('seatRow','TicketController','seatRow');
Route::get('selectCity','TicketController','selectCity');


/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::get('login','UserController','login');
Route::get('loginCheck','UserController','loginCheck');
Route::get('register','UserController','register');
Route::get('logout','UserController','logout');