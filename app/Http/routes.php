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

// 示例
Route::get('/', function () {
    return view('welcome');
});


/**
 * 网站后台
 *
 * @return 
 */

//后台登录
Route::get("admin/login","admin\login\loginController@index");
        
Route::group(['prefix' => 'admin'], function(){
        
	// 后台主页
	Route::get('/', 'admin\adminController@index'); 
	
	/**
	 * 用户管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'customer'],function(){

		// 基本信息
		Route::get('base', 'admin\customer\baseController@index');

		// 订单详情
		Route::get('order', 'admin\customer\orderController@index');

		// 评价详情
		Route::get('evaluation', 'admin\customer\evaluationController@index');

	});

	/**
	 * 商品管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'goods'],function(){

		// 品牌管理
		Route::get('brand', 'admin\goods\brandController@index');

		// 商品状态
		Route::get('status', 'admin\goods\statusController@index');

		// 商品详情
		Route::get('detail', 'admin\goods\detailController@index');

	});

	/**
	 * 订单管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'order'],function(){

		// 订单列表
		Route::get('list', 'admin\order\listController@index');

		// 评价管理
		Route::get('evaluation', 'admin\order\evaluationController@index');

		// 售后管理
		Route::get('service', 'admin\order\serviceController@index');

	});

	/**
	 * 商城管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'shop'],function(){

		// 主页管理
		Route::get('index', 'admin\shop\indexController@index');

		// 列表页管理
		Route::get('list', 'admin\shop\listController@index');

		// 详情页管理
		Route::get('detail', 'admin\shop\detailController@index');

	});

	/**
	 * 系统统计
	 * 
	 * @author [name] <[email address]>
	 */
	// Route::group(['prefix' => 'data'],function(){

	// 	// 访客数量
	// 	Route::get('visit', function(){
	// 		return view('admin/index/index');
	// 	});

	// });

	/**
	 * 员工管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'staff'],function(){

		// 员工列表
		Route::get('list', 'admin\staff\listController@index');

		// 角色管理
		Route::get('role', 'admin\staff\roleController@index');

		// 权限管理
		Route::get('power', 'admin\staff\powerController@index');

	});

	/**
	 * 网站管理
	 * 
	 * @author [name] <[email address]>
	 */
	Route::group(['prefix' => 'web'],function(){

		// 网站配置
		Route::get('config', 'admin\web\configController@index');

		// 广告管理
		Route::get('ad', 'admin\web\adController@index');

		// 友情链接
		Route::get('links', 'admin\web\linksController@index');

	});


});
