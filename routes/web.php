<?php

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
    $data = array(
        'metaTitle' => 'Welcome to endrukk.com',
        'metaDesc' => 'Welcome to endrukk.com my site',
        'user' => 'endrukk'
    );
    return view('home',$data);
});

//==========================================   databese  ===================================

Route::get('order/list2', function () {
    $orders = \App\Order::all();
    foreach($orders as $order){
//        print out order
        echo $order->name . ' belongs to ' . $order->customer->name . '<br />';
    }
});

Route::get('customer/{id}', 'CustomerController@customer');


//==========================================   routes base ===================================


Route::post('test',function(){
    echo 'POST route';
});


Route::get('test',function(){

    echo '<form action="test" method="post">
            <input type="text" name="name">
            <input type="hidden" name="_token" value="' . csrf_token() . '">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" value="ok" name="submitTestForm">
        </form>
            ';


});

Route::put('test',function(){
    echo 'PUT route';
});


Route::delete('test',function(){
    echo 'DELETE route';

});