<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutpeServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
     return view('dashboard');
 })->name('dashboard');

Route::get('/formulationstorage/micro', function () {
    return view('formulationstorage.micro');
})->name('formulationstorage.micro');

Route::get('/formulationstorage/macro', function () {
    return view('formulationstorage.macro');
})->name('formulationstorage.macro');

Route::get('/formulationstorage/medicine', function () {
    return view('formulationstorage.medicine');
})->name('formulationstorage.medicine');

Route::get('/formulationstorage/formulation', function () {
    return view('formulationstorage.formulation');
})->name('formulationstorage.formulation');

Route::get('/recordsinventorysystem/feedrequest', function () {
    return view('recordsinventorysystem.feedrequestrecords');
})->name('recordsinventorysystem.feedrequest');

Route::get('/recordsinventorysystem/farminformation', function () {
    return view('recordsinventorysystem.farminformation');
})->name('recordsinventorysystem.farminformation');

Route::get('/recordsinventorysystem/accountingbills', function () {
    return view('recordsinventorysystem.accountingbills');
})->name('recordsinventorysystem.accountingbills');

Route::get('/recordsinventorysystem/accountingpayrolls', function () {
    return view('recordsinventorysystem.accountingpayrolls');
})->name('recordsinventorysystem.accountingpayrolls');

Route::get('/recordsinventorysystem/pivotlogs', function () {
    return view('recordsinventorysystem.pivotlogs');
})->name('recordsinventorysystem.pivotlogs');

Route::get('/recordsinventorysystem/auditlogs', function () {
    return view('recordsinventorysystem.auditlogs');
})->name('recordsinventorysystem.auditlogs');

Route::get('/forecasting/monitoringinventorylevels', function () {
    return view('forecasting.monitoringinventorylevels');
})->name('forecasting.monitoringinventorylevels');

Route::get('/forecasting/messageonasana', function () {
    return view('forecasting.messageonasana');
})->name('forecasting.messageonasana');

Route::get('/productionmanagement/productionorder', function () {
    return view('productionmanagement.productionorder');
})->name('productionmanagement.productionorder');

Route::get('productionmanagement/premixes', function () {
    return view('productionmanagement.premixes');
})->name('productionmanagement.premixes');

Route::get('/productionmanagement/feedsinformation', function () {
    return view('productionmanagement.feedsinformation');
})->name('productionmanagement.feedsinformation');

Route::get('/settings', function () {
    return view('settings.home');
})->name('settings');

Route::get('/settings/account', function () {
    return view('settings.accounts');
})->name('settings.account');

Route::get('/settings/addaccount', function () {
    return view('settings.addaccount');
})->name('settings.addaccount');

Route::get('/settings/editaccount', function () {
    return view('settings.editaccount');
})->name('settings.editaccount');