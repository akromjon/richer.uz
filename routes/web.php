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
Route::get('/single/{id}','course\CoursesController@single')->name('test');

// using prefix for courses page
	Route::namespace('course')->prefix('/courses')->group(function()
		{

		  Route::get('/','CoursesController@index')->name('all_courses');
		  Route::prefix('/{course:slug}')->group(function()
		  {
			Route::get('/','CoursesController@view')->name('view');
			Route::get('/{id}','CoursesController@single')->name('action');

			//Otabek shotta qilish kere {course:slug}/{lesson:slug}
			
			// Route::get('/lesson/{id}','CoursesController@view')->name('lesson');
			// Route::get('/lesson/{id}','CourseController@lesson')->name('view_lesson');
			// Route::get('lesson/{id}','CoursesController@lessonn')->name('lesson');

		  });

		});
		
// using prefix for news page
	Route::namespace('news')->prefix('/news')->group(function()
		{
			Route::get('/','NewsController@index')->name('news');
			Route::get('/view','NewsController@view')->name('news_view');

		});
// using prefix for quizes page

	Route::prefix('/quiz')->group(function()
		{
			Route::get('/','QuizesController@index')->name('quiz');

		});

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

	// this routes are for courses table and CoursesController
	Route::get('/courses/view','AdminCoursesController@index')->name('view_courses');

	// this routes are for creating course categories and view them
	Route::get('/courses/categories/add/','CourseCategoryController@view')->name('view_course_categories_add');
	Route::post('/courses/categories/add/','CourseCategoryController@create')->name('create_course_categories');
	Route::get('/courses/categories/view/', 'CourseCategoryController@index')->name('view_course_categories');

}
);


Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register','LoginController@register')->name('register');