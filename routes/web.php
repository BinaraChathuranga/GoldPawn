<?php
use App\CompletedTransactions;
use App\renewTransactions;
use App\transactions;
use App\articles;
use App\kValues;
use App\kPrices;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/transView/{id}', 'HomeController@transView')->name('transView');
    
    Route::get('/manualInvoice/{id}', 'HomeController@manualInvoice')->name('manualInvoice');
    // Route::get('/completedInvoice/{id}', 'HomeController@completedInvoice')->name('completedInvoice');
    Route::get('/json-getmprice', 'HomeController@getMprice')->name('getMprice');
    Route::get('/invoice', 'HomeController@invoiceAuto')->name('invoiceAuto');
    Route::get('/invoiceIssued/{id}', 'HomeController@invoiceIssued')->name('invoiceIssued');
    Route::get('/json-getaprice', 'HomeController@getAprice')->name('getAprice');
    Route::get('/json-getintrestRate', 'HomeController@getiRate')->name('getiRate');
    Route::get('/completeTransaction/{id}', 'HomeController@completeTransaction')->name('completeTransaction');
    Route::get('/renewInvoice/{id}', 'HomeController@renewInvoice')->name('renewInvoice');
    
    Route::post('/renewTransaction', 'HomeController@renewTrans')->name('renewTransaction');

    Route::get('/warning1', 'HomeController@warning1')->name('warning1');
    Route::get('/warning2', 'HomeController@warning2')->name('warning2');
    Route::get('/warning3', 'HomeController@warning3')->name('warning3');

    Route::get('/warning1letter-view/{id}', 'HomeController@warn1letter');
    Route::get('/warn1letterIssued/{id}', 'HomeController@warn1letterIssued');
    Route::get('/warning1-view/{id}', 'MailControllerAdmin@homeEmail1Admin');
    Route::post('/Admin-sendEmail1', 'MailControllerAdmin@sendemail1');

    Route::get('/warning2letter-view/{id}', 'HomeController@warn2letter');
    Route::get('/warn2letterIssued/{id}', 'HomeController@warn2letterIssued');
    Route::get('/warning2-view/{id}', 'MailControllerAdmin@homeEmail2Admin');
    Route::post('/Admin-sendEmail2', 'MailControllerAdmin@sendemail2');

    Route::get('/warning3letter-view/{id}', 'HomeController@warn3letter');
    Route::get('/warn3letterIssued/{id}', 'HomeController@warn3letterIssued');
    Route::get('/warning3-view/{id}', 'MailControllerAdmin@homeEmail3Admin');
    Route::post('/Admin-sendEmail3', 'MailControllerAdmin@sendemail3');

    Route::get('/deleteTransaction/{id}', 'HomeController@deleteTransaction');

    Route::get('/AdminRegister', 'AdminRegController@index')->name('AdminRegister');
    Route::post('/AdminRegister1', 'AdminRegController@AdminReg');

    Route::get('/activeUsers', 'AdminRegController@activeUsers');
    Route::get('/regCustomers', 'AdminRegController@regCustomers');

    Route::resource('/home/transactions', 'TransController',['as'=>'home']);
    Route::resource('/home/articles', 'ArticleController',['as'=>'home']);
    Route::resource('/home/kvalue', 'KvalController',['as'=>'home']);
    Route::resource('/home/kPrices', 'KpricesController',['as'=>'home']);
    Route::resource('/home/invoice', 'InvoiceController',['as'=>'home']);
    Route::resource('/home/ledger', 'LedgerController',['as'=>'home']);
    Route::resource('/home/completedTransactions', 'CompletedTransController',['as'=>'home']);
    Route::resource('/home/renewTransactions', 'RenewTransController',['as'=>'home']);
    Route::resource('/home/Warning', 'warnController',['as'=>'home']);

    Route::get('/comTransReport', 'HomeController@comTransReport');
    Route::get('/incomTransReport', 'HomeController@incomTransReport');
    Route::get('/renewTransReport', 'HomeController@renewTransReport');
    Route::get('/incomeReport', 'HomeController@incomeReport');
    Route::get('/costReport', 'HomeController@costReport');

    View::composer(['*'],function($view){
        $artView=articles::all();
        $view->with('artView', $artView);

    });


    View::composer(['*'],function($view){
        $kValView=kPrices::all();
        $view->with('kValView', $kValView);

    });

    View::composer(['*'],function($view){
        $comTrans=CompletedTransactions::all();
        $view->with('comTrans', $comTrans);

    });
    View::composer(['*'],function($view){
        $renewTrans=renewTransactions::all();
        $view->with('renewTrans', $renewTrans);

    });
    View::composer(['*'],function($view){
        $cost=transactions::all();
        $view->with('cost', $cost);

    });


    Route::get('/json-getkValue', 'HomeController@kValues')->name('getkValues');


});

Route::group(['middleware'=>['auth','co_admin']],function(){
    Route::get('/co-home', 'coAdmin\HomeControllerCO@index')->name('co-home');
    Route::get('/co-transView/{id}', 'coAdmin\HomeControllerCO@transView')->name('co-transView');
    
    Route::get('/co-json-getmprice','coAdmin\HomeControllerCO@getMprice')->name('co-getMprice');
    Route::get('/co-invoice', 'coAdmin\HomeControllerCO@invoiceAuto')->name('co-invoiceAuto');
    Route::get('/co-invoiceIssued/{id}', 'coAdmin\HomeControllerCO@invoiceIssued')->name('co-invoiceIssued');
    Route::get('/co-json-getaprice', 'coAdmin\HomeControllerCO@getAprice')->name('co-getAprice');
    Route::get('/co-json-getintrestRate', 'HomeController@getiRate')->name('getiRate');
    Route::get('/co-completeTransaction/{id}', 'coAdmin\HomeControllerCO@completeTransaction')->name('co-completeTransaction');
    Route::get('/co-renewInvoice/{id}', 'coAdmin\HomeControllerCO@renewInvoice')->name('co-renewInvoice');
    
    Route::post('/co-renewTransaction', 'coAdmin\HomeControllerCO@renewTrans')->name('co-renewTransaction');
    Route::get('/co-warnIssued/{id}', 'coAdmin\HomeControllerCO@warn1Issued');

    Route::get('/co-warning1', 'coAdmin\HomeControllerCO@warning1')->name('co-warning1');
    Route::get('/co-warning2', 'coAdmin\HomeControllerCO@warning2')->name('co-warning2');
    Route::get('/co-warning3', 'coAdmin\HomeControllerCO@warning3')->name('co-warning3');

    Route::get('/co-warning1letter-view/{id}', 'coAdmin\HomeControllerCO@warn1letter');
    Route::get('/co-warn1letterIssued/{id}', 'coAdmin\HomeController@warn1letterIssued');
    Route::get('/co-warning1-view/{id}', 'MailController@homeEmail1');
    Route::post('/sendEmail1', 'MailController@sendemail1');

    Route::get('/co-warning2letter-view/{id}', 'coAdmin\HomeControllerCO@warn2letter');
    Route::get('/co-warn2letterIssued/{id}', 'coAdmin\HomeController@warn2letterIssued');
    Route::get('/co-warning2-view/{id}', 'MailController@homeEmail2');
    Route::post('/sendEmail2', 'MailController@sendemail2');

    Route::get('/co-warning3letter-view/{id}', 'coAdmin\HomeControllerCO@warn3letter');
    Route::get('/co-warn3letterIssued/{id}', 'coAdmin\HomeController@warn3letterIssued');
    Route::get('/co-warning3-view/{id}', 'MailController@homeEmail3');
    Route::post('/sendEmail3', 'MailController@sendemail3');
   

    Route::get('/co-deleteTransaction/{id}', 'coAdmin\HomeControllerCO@deleteTransaction');


    Route::resource('/co-home/co-transactions', 'TransControllerCO',['as'=>'co-home']);
    Route::resource('/co-home/co-invoice', 'InvoiceControllerCO',['as'=>'co-home']);
    Route::resource('/co-home/co-completedTransactions', 'CompletedTransControllerCA',['as'=>'co-home']);
    Route::resource('/co-home/co-renewTransactions', 'RenewTransControllerCO',['as'=>'co-home']);

    Route::get('/co-json-getkValue', 'coAdmin\HomeController@kValues')->name('getkValues');

    




});

Route::group(['middleware'=>['auth','customer']],function(){

    Route::get('/cus-home', 'customer\HomeControllerCUS@index')->name('cus-home');
    Route::post('/showDetails', 'customer\HomeControllerCUS@showDetails')->name('showDetails');
    Route::get('/cus-transView/{id}', 'customer\HomeControllerCUS@transView')->name('cus-transView');
    

});












