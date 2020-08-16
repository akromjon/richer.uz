<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




/****************************************** */
/****************************************** */
Route::namespace('admin')->get('/', 'UsersController@index')->name('home_page');
/**************************************** */
/*************************************** */





/************************************** */
Route::namespace('course')->prefix('/courses')->group(function () {
	/******************************************* */
	Route::get('/', 'CoursesController@index')->name('all_courses');
	Route::post('/comment', 'CommentsController@store_course_comment')->name('course_comment');
	Route::post('/comment/lesson', 'CommentsController@store_lesson_comment')->name('lesson_comment');
	Route::post('/answer', 'QuizesController@store')->name('answer');
	Route::put('/view/{put}', 'CommentsController@update')->name('view_counter'); // this is for counter
	/****************************************** */
	Route::prefix('/{course:slug}')->group(function () {
		Route::get('/', 'CoursesController@view')->name('view'); // ajax is here
		Route::get('/quiz/{quiz:slug}', 'QuizesController@quiz')->middleware('auth')->name('quiz_view');
		Route::get('/{lesson:slug}', 'LessonsController@lesson')->middleware('auth')->name('action');
	});
});









/*********************************** */
/*********************************** */

Route::namespace('blog')->prefix('/blog')->group(function () {
	Route::post('/comment', 'BlogsController@comment')->name('comment_article');
	Route::get('/', 'BlogsController@index')->name('blog');
	Route::get('/{blog::slug}', 'BlogsController@view')->name('news_view');
	Route::prefix('/category/{category::title}')->group(function () {
		Route::get('/', 'BlogsController@category')->name('category_blog');
	});
});







/********************* */
Route::get('/contact', 'contact\ContactsController@index')->name('contact');
/******************** *******/
/**************************** */






/****************************** */
Route::namespace('user')->prefix('/user')->group(function () {
	Route::get('/', 'UsersController@index')->name('user_main');
	Route::get('/my_courses', 'UsersController@mycourses')->name('my_courses');
	//Route::get('/chat','UsersController@chat')->name('chat');


});





/***************************** */

/*************************** */
Route::namespace('admin')->prefix('/administrator')->middleware('can:manage-user')->group(function () {
	Route::get('/', 'AdminController@index')->name('main_dashboard');
	///*******************************************///
	///*******************************///
	Route::prefix('/users')->group(function () {
		Route::get('/index', 'UsersController@index')->name('all_users');
		Route::get('/{user}/edit', 'UsersController@edit')->name('edit_user');
		Route::put('/{user}/update', 'UsersController@update')->name('update_user');
		Route::delete('/{user}/delete', 'UsersController@destroy')->name('delete_user');
	});
	Route::prefix('/teacher')->group(function () {
		Route::get('/', 'TeacherController@add')->name('add_teacher');
		Route::get('/index', 'TeacherController@index')->name('all_teachers');
		Route::post('/create', 'TeacherController@create')->name('create_teacher');
		Route::get('/{id}', 'TeacherController@edit')->name('edit_teacher');
		Route::put('/{id}/update', 'TeacherController@update')->name('update_teacher');
		Route::delete('/{id}/delete', 'TeacherController@destroy')->name('delete_teacher');
	});
	///*******************************************///
	///*******************************************///
	Route::prefix('/course-category')->group(function () {
		Route::get('/', 'CourseCategoryController@add')->name('add_category');
		Route::get('/index', 'CourseCategoryController@index')->name('all_categories');
		Route::post('/create', 'CourseCategoryController@create')->name('create_category');
		Route::get('/{id}', 'CourseCategoryController@edit')->name('edit_category');
		Route::put('/{id}/update', 'CourseCategoryController@update')->name('update_category');
		Route::delete('/{id}/delete', 'CourseCategoryController@destroy')->name('delete_course_category');
	});
	//************************************/
	//************************************/
	Route::prefix('/courses')->group(function () {
		Route::get('/', 'CoursesController@add')->name('add_course');
		Route::get('/index', 'CoursesController@index')->name('all_courses_admin');
		Route::post('/create', 'CoursesController@create')->name('create_course');
		Route::get('/{id}', 'CoursesController@edit')->name('edit_course');
		Route::put('/{id}/update', 'CoursesController@update')->name('update_course');
		Route::put('/{id}/update_confirmation', 'CoursesController@update_confirmation')->name('update_course_confirmation');
		Route::delete('/{id}/delete', 'CoursesController@destroy')->name('delete_course');
	});
	/***********************************/
	/**********************************/
	Route::prefix('/sections')->group(function () {
		Route::get('/', 'SectionsController@add')->name('add_section');
		Route::get('/index', 'SectionsController@index')->name('all_sections');
		Route::post('/create', 'SectionsController@create')->name('create_section');
		Route::get('/{id}', 'SectionsController@edit')->name('edit_section');
		Route::put('/{id}/update', 'SectionsController@update')->name('update_section');
		Route::delete('/{id}/delete', 'SectionsController@destroy')->name('delete_section');
	});
	/***********************************/
	/**********************************/
	Route::prefix('/lessons')->group(function () {
		Route::get('/index', 'LessonsController@index')->name('all_lessons');
		Route::get('/', 'LessonsController@add')->name('add_lesson');
		Route::post('/create', 'LessonsController@create')->name('create_lesson');
		Route::get('/{id}', 'LessonsController@edit')->name('edit_lesson');
		Route::put('/{id}/update', 'LessonsController@update')->name('update_lesson');
		Route::delete('/{id}/delete', 'LessonsController@destroy')->name('delete_lesson');
	});
	/***********************************/
	/**********************************/
	Route::prefix('/quizes')->group(function () {
		Route::get('/index', 'QuizesController@index')->name('all_quizes');
		/************************* */
		/************************** */
		Route::post('/create_category', 'QuizesController@create_quiz_categories')->name('create_quiz_categories');
		Route::get('/{id}/edit_category', 'QuizesController@edit_category')->name('edit_quiz_category');
		Route::put('/{id}/update_category', 'QuizesController@update_category')->name('update_quiz_category');
		Route::delete('/{id}/delete_category', 'QuizesController@destroy_category')->name('delete_category');
		/**************************** */
		/***************************** */
		Route::post('/create_question', 'QuizesController@create_quiz_questions')->name('create_quiz_questions');
		Route::get('/{id}/edit_question', 'QuizesController@edit_question')->name('edit_quiz_question');
		Route::put('/{id}/update_question', 'QuizesController@update_question')->name('update_quiz_question');
		Route::delete('/{id}/delete_question', 'QuizesController@destroy_question')->name('delete_question');
		/**************************** */
		/*************************** */
		Route::post('/create_option', 'QuizesController@create_quiz_options')->name('create_quiz_options');
		Route::get('/{id}/edit_option', 'QuizesController@edit_option')->name('edit_quiz_option');
		Route::put('/{id}/update_option', 'QuizesController@update_option')->name('update_quiz_option');
		Route::delete('/{id}/delete_options', 'QuizesController@destroy_options')->name('delete_options');

		/*************************** */
		/*************************** */
	});
	/****************************** */
	/**************************** */
	Route::prefix('/blogs')->group(function () {
		Route::get('/index', 'BlogsController@index')->name('all_blogs');
		/*************************** */
		Route::post('/create_category', 'BlogsController@store_category')->name('create_blog_category');
		Route::get('/{id}/edit_category', 'BlogsController@edit_category')->name('edit_blog_category');
		Route::put('/{id}/update_category', 'BlogsController@update_category')->name('update_blog_category');
		Route::delete('/{id}/delete_category', 'BlogsController@destroy_category')->name('delete_blog_category');
		/************************** */
		Route::post('/create_article', 'BlogsController@store_article')->name('create_blog_article');
		Route::get('/{id}/edit_article', 'BlogsController@edit_article')->name('edit_blog_article');
		Route::put('/{id}/update_article', 'BlogsController@update_article')->name('update_blog_article');
		Route::delete('/{id}/delete_article', 'BlogsController@destroy_article')->name('delete_blog_article');
		/*********************** */
	});
	/************************ */
	/************************* */

	Route::prefix('/comments')->group(function () {
		/************************************************/
		Route::get('/course/index', 'CommentsController@index')->name('all_comments');
		Route::get('/{id}/edit', 'CommentsController@edit_course_comment')->name('edit_course_comment');
		Route::put('/{id}/update', 'CommentsController@update_course_comment')->name('update_course_comment');
		Route::put('/{id}/update_confirmation', 'CommentsController@update_confirmation')->name('update_confirmation');
		Route::post('/reply_comment', 'CommentsController@reply_comment')->name('reply_comment');
		Route::delete('/{id}/delete_course_comment', 'CommentsController@course_comment_destroy')->name('delete_course_comment');
		/******************************************* */
		/****************************************** */
		Route::get('/lesson/index', 'CommentsController@lesson_index')->name('all_lesson_comments');
		Route::get('/{id}/edit_lesson', 'CommentsController@edit_lesson_comment')->name('edit_lesson_comment');
		Route::put('/{id}/update_lesson', 'CommentsController@update_lesson_comment')->name('update_lesson_comment');
		Route::put('/{id}/update_confirmation_lesson', 'CommentsController@update_lesson_confirmation')->name('update_lesson_confirmation');
		Route::post('/reply_comment_lesson', 'CommentsController@reply_lesson_comment')->name('reply_lesson_comment');
		Route::delete('/{id}/delete_lessson_comment', 'CommentsController@lesson_comment_destroy')->name('delete_lesson_comment');
		/*********************************************** */
		/*********************************************** */
		Route::get('/article/index', 'CommentsController@article_index')->name('all_article_comments');
		Route::get('/{id}/edit_article', 'CommentsController@edit_article_comment')->name('edit_article_comment');
		Route::put('/{id}/update_article', 'CommentsController@update_article_comment')->name('update_article_comment');
		Route::put('/{id}/update_confirmation_article', 'CommentsController@update_article_confirmation')->name('update_article_confirmation');
		Route::post('/reply_comment_article', 'CommentsController@reply_article_comment')->name('reply_article_comment');
		Route::delete('/{id}/delete_article_comment', 'CommentsController@article_comment_destroy')->name('delete_article_comment');
	});
});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/login', 'LoginController@index')->name('login');
Route::get('/register', 'LoginController@register')->name('register');







































































































































































// Route::namespace('admin')->prefix('/admin')->group(function()
// {
// 	// this routes for teacher
// 	Route::get('/teacher/add','TeacherController@teacher')->name('teacher');
	
	

// 	// this route is for home of admin system
// 	Route::get('/dashboard','TeacherController@home')->name('dashboard');

// 	//section creation create_section
// 	Route::get('/section','AdminController@create')->name('create_course_section');	
// 	Route::post('/section/add','AdminController@create_section')->name('create_section');

// 	Route::get('/lesson','AdminController@create_lesson')->name('create_course_lesson');
// 	Route::get('/lesson/all','AdminController@all_lessons')->name('all_lessons');
// 	Route::post('/lesson/add','AdminController@add_lesson')->name('course_lesson');
// 	Route::get('/lesson/{id}','AdminController@edit_lesson')->name('edit_lesson');
// 	Route::post('/lesson/{id}/edit','AdminController@update')->name('update_lesson');
// 	Route::delete('/lesson/{id}','AdminController@destroy')->name('delete_lesson');

// 	// this routes are for courses table and CoursesController
// 	Route::get('/courses/view','AdminCoursesController@index')->name('view_courses');

// 	// this routes are for creating course categories and view them
// 	Route::get('/courses/categories/add/','CourseCategoryController@view')->name('view_course_categories_add');
// 	Route::post('/courses/categories/add/','CourseCategoryController@create')->name('create_course_categories');
// 	Route::get('/courses/categories/view/', 'CourseCategoryController@index')->name('view_course_categories');

// }
// );
