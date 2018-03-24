<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('fontend.home');
});
Route::Controllers(array("Auth"=>"Auth\AuthController"));
Route::group(array("prefix"=>"admin","middleware"=>"auth"),function(){
	Route::get("/",function(){
		return view("admin.index");
	});
	Route::get("index",function(){
		return view("admin.index");
	});

	//===================group lang
			Route::group(array("prefix"=>"lang","middleware"=>"auth"),function(){
					// Route::get("news","Admin\NewsController@list_news");
					Route::get("/{lang}/news/cate/{id}","Admin\NewsController@list_news_cate");
			// Route::get("news/add","Admin\NewsController@add");
			// Route::post("/news/do_add","Admin\NewsController@do_add");
			// Route::get("/news/edit/{id}","Admin\NewsController@edit");
			// Route::post("/news/do_edit/{id}","Admin\NewsController@do_edit");
			// Route::get("/news/delete/{id}","Admin\NewsController@delete");

	});


	//----------------------eng group
	//delete edit add user
	Route::get("user","Admin\UserController@list_user");
	Route::get("/user/delete/{id}","Admin\UserController@delete");
	Route::get("/user/add","Admin\UserController@add");
	Route::post("/user/do_add","Admin\UserController@do_add");
	Route::get("/user/edit/{id}","Admin\UserController@edit");
	Route::post("/user/do_edit/{id}","Admin\UserController@do_edit");
	//end user


	//=================lang
	//Route::get("lang\{$lang}","Admin\LangController@list_lang");

	//==============end lang

	//News------------
	Route::get("news","Admin\NewsController@list_news");
	//Route::get("news/cate/{id}","Admin\NewsController@list_news_cate");
	Route::get("news/add","Admin\NewsController@add");
	Route::post("/news/do_add","Admin\NewsController@do_add");
	Route::get("/news/edit/{id}","Admin\NewsController@edit");
	Route::post("/news/do_edit/{id}","Admin\NewsController@do_edit");
	Route::get("/news/delete/{id}","Admin\NewsController@delete");
Route::get("/news/check/{id}","Admin\NewsController@check");
	Route::get("/news/uncheck/{id}","Admin\NewsController@uncheck");
    Route::get("/news/an/{id}","Admin\NewsController@an");
	Route::get("/news/hien/{id}","Admin\NewsController@hien");
Route::get("/news/hot/{id}","Admin\NewsController@hot");
	Route::get("/news/unhot/{id}","Admin\NewsController@unhot");
	//end news--------------
// videos
	Route::get("albumvideos","Admin\VideosController@listvideos");
	Route::get("/albumvideos/check/{id}","Admin\VideosController@check");
	Route::get("/albumvideos/uncheck/{id}","Admin\VideosController@uncheck");
	Route::get("/albumvideos/edit/{slug}","Admin\VideosController@edit");
	Route::post("/albumvideos/do_edit/{slug}","Admin\VideosController@do_edit");
	Route::get("/albumvideos/add/","Admin\VideosController@add");
	Route::get("/albumvideos/delete/{id}","Admin\VideosController@delete");
	Route::post("/albumvideos/do_add/","Admin\VideosController@do_add");
Route::get("/albumvideos/hot/{id}","Admin\VideosController@hot");
	Route::get("/albumvideos/unhot/{id}","Admin\VideosController@unhot");

	// end videos

		//slide------------
	Route::get("slide","Admin\SlideController@list_slide");
	Route::get("/slide/add","Admin\SlideController@add");
	Route::post("/slide/do_add","Admin\SlideController@do_add");
	Route::get("/slide/edit/{id}","Admin\SlideController@edit");
	Route::post("/slide/do_edit/{id}","Admin\SlideController@do_edit");
	Route::get("/slide/delete/{id}","Admin\SlideController@delete");
Route::get("/slide/cong/{id}","Admin\SlideController@cong");
Route::get("/slide/tru/{id}","Admin\SlideController@tru");
Route::get("/slide/check/{id}","Admin\SlideController@check");
	Route::get("/slide/uncheck/{id}","Admin\SlideController@uncheck");

	//end slide--------------
	//banner------------
	Route::get("banner","Admin\BannerController@list_slide");
	Route::get("/banner/add","Admin\BannerController@add");
	Route::post("/banner/do_add","Admin\BannerController@do_add");
	Route::get("/banner/edit/{id}","Admin\BannerController@edit");
	Route::post("/banner/do_edit/{id}","Admin\BannerController@do_edit");
	Route::get("/banner/delete/{id}","Admin\BannerController@delete");
Route::get("/banner/cong/{id}","Admin\BannerController@cong");
Route::get("/banner/tru/{id}","Admin\BannerController@tru");
Route::get("/banner/check/{id}","Admin\BannerController@check");
	Route::get("/banner/uncheck/{id}","Admin\BannerController@uncheck");

	//end banner--------------


		//facehome------------
	Route::get("facehome","Admin\FacehomeController@list_facehome");
	Route::get("/facehome/add","Admin\FacehomeController@add");
	Route::post("/facehome/do_add","Admin\FacehomeController@do_add");
	Route::get("/facehome/edit/{id}","Admin\FacehomeController@edit");
	Route::post("/facehome/do_edit/{id}","Admin\FacehomeController@do_edit");
	Route::get("/facehome/delete/{id}","Admin\FacehomeController@delete");

	//end facehome--------------





	//Cate---------------
	Route::get("category","Admin\CategoryController@list_category");
	Route::get("category/add","Admin\CategoryController@add");
	Route::post("/category/do_add","Admin\CategoryController@do_add");
	Route::get("/category/edit/{id}","Admin\CategoryController@edit");
	Route::post("/category/do_edit/{id}","Admin\CategoryController@do_edit");
	Route::get("/category/delete/{id}","Admin\CategoryController@delete");
	//end cate---------------

	//comment------------------
	Route::get("comment","Admin\CommentController@list_comment");
	Route::get("/comment/edit/{id}","Admin\CommentController@edit");
	Route::post("/comment/do_edit/{id}","Admin\CommentController@do_edit");
	Route::get("/comment/delete/{id}","Admin\CommentController@delete");
	Route::get("/comment/check/{id}","Admin\CommentController@check");
	Route::get("/comment/uncheck/{id}","Admin\CommentController@uncheck");

	//end comment=====================

	//contact-----------------------
	Route::get("contact","Admin\ContactController@list_contact");
	Route::get("/contact/delete/{id}","Admin\ContactController@delete");
	Route::get("/contact/check/{id}","Admin\ContactController@check");
	Route::get("/contact/uncheck/{id}","Admin\ContactController@uncheck");
	//----------end contact============

});

//login
Route::get("login",function(){
	return view("auth.login");
});
Route::post("login",function(){
	//echo Hash::make("123");
	$email = Request::get("username");
	$pass = Request::get("password");
	if(Auth::attempt(array("email"=>$email,"password"=>$pass)))
		return redirect("admin/index");
	else
		return redirect("login");
});
Route::get("logout",function(){
	Auth::logout();
	return redirect("login");
});


//contact
Route::get("contact",function(){
	return view("fontend.contact");
});
Route::get("albumvideos","Fontend\NewsController@list_videos");
Route::get("albumvideos/{slug}","Fontend\NewsController@videos");
Route::post("contact/add","Fontend\ContactController@add");
	//===================group lang
Route::group(array("prefix"=>"lg"),function(){
		// Route::get("{lang}/category/{cate}","Fontend\NewsController@list_cate");	
		Route::get("{lang}/category/{cate}","Fontend\NewsController@list_cate");
		Route::get("{lang}/tin-tuc/{slug}","Fontend\NewsController@news_slug");
		Route::post("{lang}/tin-tuc/{id}","Fontend\NewsController@comment");
		Route::get("/1/van-hoa-icc",function(){
			return view("fontend.vhicc");
		});

});


	//----------------------eng group
//===============link bai post
	// echo $_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI']; 
//==============