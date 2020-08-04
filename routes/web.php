<?php

use Illuminate\Support\Facades\Route;
use App\Course;

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

Route::namespace('admin')->get('/','UsersController@index')->name('home');
// Route::get('/single/{id}','course\CoursesController@single')->name('test');
// Route::get('users','IpController@getuserinfo');




// using prefix for courses page
	Route::namespace('course')->prefix('/courses')->group(function()
		{

		  Route::get('/','CoursesController@index')->name('all_courses');
		  Route::post('/comment','CommentsController@store')->name('comment');
		  Route::post('/answer','QuizesController@store')->name('answer');
		  Route::put('/view/{put}','CommentsController@update')->name('view_counter'); // this is for counter
		 
			
		  Route::prefix('/{course:slug}')->group(function()
		  {
			  
			Route::get('/','CoursesController@view')->name('view'); // ajax is here
			Route::get('/quiz/{quiz:slug}','QuizesController@quiz')->name('quiz_view');					
			Route::get('/{lesson:slug}','LessonsController@lesson')->name('action');
		
		  });
		  
		  

		});
		
// using prefix for blog page
	Route::namespace('blog')->prefix('/blog')->group(function()
		{
			Route::post('/comment','BlogsController@comment')->name('comment_article');
			Route::get('/','BlogsController@index')->name('blog');
			Route::get('/{blog::slug}','BlogsController@view')->name('news_view');
			Route::prefix('/category/{category::title}')->group(function(){
				Route::get('/','BlogsController@category')->name('category_blog');
				
			});

		});
// using prefix for quizes page

		// Route::prefix('/quiz')->group(function()
		// 	{
		// 		Route::get('/','QuizesController@index')->name('quiz');

		// 	});

// contact route

Route::get('/contact', 'contact\ContactsController@index')->name('contact');

Route::namespace('admin')->prefix('/admin')->group(function()
{
	// this routes for teacher
	Route::get('/teacher/add','TeacherController@teacher')->name('teacher');
	Route::get('/teacher/view','TeacherController@view')->name('view_teacher');
	Route::post('/teacher/add','TeacherController@add')->name('add_teacher');

	// this route is for home of admin system
	Route::get('/dashboard','TeacherController@home')->name('dashboard');

	//section creation create_section
	Route::get('/section','AdminController@create')->name('create_course_section');	
	Route::post('/section/add','AdminController@create_section')->name('create_section');

	Route::get('/lesson','AdminController@create_lesson')->name('create_course_lesson');
	Route::get('/lesson/all','AdminController@all_lessons')->name('all_lessons');
	Route::post('/lesson/add','AdminController@add_lesson')->name('course_lesson');
	Route::get('/lesson/{id}','AdminController@edit_lesson')->name('edit_lesson');
	Route::post('/lesson/{id}/edit','AdminController@update')->name('update_lesson');
	Route::delete('/lesson/{id}','AdminController@destroy')->name('delete_lesson');

	// this routes are for courses table and CoursesController
	Route::get('/courses/view','AdminCoursesController@index')->name('view_courses');

	// this routes are for creating course categories and view them
	Route::get('/courses/categories/add/','CourseCategoryController@view')->name('view_course_categories_add');
	Route::post('/courses/categories/add/','CourseCategoryController@create')->name('create_course_categories');
	Route::get('/courses/categories/view/', 'CourseCategoryController@index')->name('view_course_categories');

}
);

Route::namespace('user')->prefix('/user')->group(function()
		{
			Route::get('/','UsersController@index');
			

		});




Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register','LoginController@register')->name('register');