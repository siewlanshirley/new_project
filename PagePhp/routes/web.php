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
    return view('auth.login');
});


Route::get('home', function () {

    $pagelist = DB::table('tblpage')->get();

    return view('pagelist',compact('pagelist'));
});




Route::get('page', function () {

	    return view('page');
});

Route::get('newpage', function () {

	    return view('page');
});

Route::get('test123', function () {

	    return view('test123');
});

Route::get('page/{pageid}',function($pageid){
	$getPageById = DB::table('tblpage')->where('id',$pageid)->first();

	//$getPageByIdOnModel = Page::find($pageid);

	echo json_encode($getPageById);

	//return $getPageById->pageName;
});



Route::get('pagelist', function () {

    $pagelist = DB::table('tblpage')->get();

    return view('pagelist',compact('pagelist'));
});

Route::get('admin', function () {
    return view('admin_template');
});

Route::get('test', 'TestController@index');

//Route::get('testmysql', 'TestController@mysql'); 

Route::get ('view',function () {
	return view ('view');
});

Route:: get ('logout', function () {
	return view ('/');
});

Auth::routes();

Route::get ('imagetest','TestController@image');


//Route::get('/home', 'HomeController@index')->name('pagelist');


