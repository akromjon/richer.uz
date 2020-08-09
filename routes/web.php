<?php

use Illuminate\Support\Facades\Route;
use App\Course;
use App\CourseCategory;
use App\Http\Controllers\admin\CourseCategoryController;

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

Route::namespace('admin')->prefix('/admin_system')->group(function()
{
			Route::get('/','AdminController@index')->name('main_dashboard');			
			///*******************************************///
			///************teacher settings*******************///
			Route::prefix('/teacher')->group(function()
			{		
				Route::get('/', 'TeacherController@add')->name('add_teacher');
				Route::get('/index', 'TeacherController@index')->name('all_teachers');
				Route::post('/create','TeacherController@create')->name('create_teacher');
				Route::get('/{id}', 'TeacherController@edit')->name('edit_teacher');
				Route::post('/{id}/update', 'TeacherController@update')->name('update_teacher');
				Route::delete('/{id}/delete','TeacherController@destroy')->name('delete_teacher');				
			});
			///*******************************************///
			///*******************************************///
			Route::prefix('/course-category')->group(function()
			{
				Route::get('/','CourseCategoryController@add')->name('add_category');
				Route::get('/index','CourseCategoryController@index')->name('all_categories');
				Route::post('/create','CourseCategoryController@create')->name('create_category');
				Route::get('/{id}','CourseCategoryController@edit')->name('edit_category');
				Route::post('/{id}/update','CourseCategoryController@update')->name('update_category');
				Route::delete('/{id}/delete','CourseCategoryController@destroy')->name('delete_category');
			});
			//************************************/
			//************************************/
			Route::prefix('/courses')->group(function()
			{
				Route::get('/','CoursesController@add')->name('add_course');
				Route::get('/index','CoursesController@index')->name('all_courses_admin');
				Route::post('/create','CoursesController@create')->name('create_course');
				Route::get('/{id}','CoursesController@edit')->name('edit_course');
				Route::post('/{id}/update','CoursesController@update')->name('update_course');
				Route::delete('/{id}/delete','CoursesController@destroy')->name('delete_course');
				
			});
			/***********************************/
			/**********************************/
			Route::prefix('/sections')->group(function()
			{
				Route::get('/','SectionsController@add')->name('add_section');
				Route::get('/index','SectionsController@index')->name('all_sections');
				Route::post('/create','SectionsController@create')->name('create_section');
				Route::get('/{id}','SectionsController@edit')->name('edit_section');				
				Route::post('/{id}/update','SectionsController@update')->name('update_section');
				Route::delete('/{id}/delete','SectionsController@destroy')->name('delete_section');
				
			});
			/***********************************/
			/**********************************/
			Route::prefix('/lessons')->group(function()
			{
				Route::get('/index','LessonsController@index')->name('all_lessons');
				Route::get('/','LessonsController@add')->name('add_lesson');
				Route::post('/create','LessonsController@create')->name('create_lesson');
				Route::get('/{id}','LessonsController@edit')->name('edit_lesson');				
				Route::post('/{id}/update','LessonsController@update')->name('update_lesson');
				Route::delete('/{id}/delete','LessonsController@destroy')->name('delete_lesson');

			});
			/***********************************/
			/**********************************/

			

			

});

Route::namespace('user')->prefix('/user')->group(function()
		{
			Route::get('/','UsersController@index')->name('user_main');
			Route::get('/my_courses','UsersController@mycourses')->name('my_courses');
			// Route::get('/chat','UsersController@chat')->name('chat');
			

		});





Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register','LoginController@register')->name('register');