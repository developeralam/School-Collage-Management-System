<?php
 
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Backend\FullCalenderController@show')->name('full.calender');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| 
| All admin Route are going here
| Create Read Update Will go here
|
*/
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'Backend\BackendPageController@index')->name('admin.dashboard');

	//Student Routes
	Route::group(['prefix' => 'student'], function(){
		Route::get('/', 'Backend\StudentController@index')->name('admin.student');
		Route::get('/create', 'Backend\StudentController@create')->name('admin.student.create');
		Route::post('/store', 'Backend\StudentController@store')->name('admin.student.store');
		Route::get('/get-students/{class}', 'Backend\StudentController@getStudent')->name('admin.getStudent');
		Route::get('/edit/{id}', 'Backend\StudentController@edit')->name('admin.student.edit');
		Route::post('/update/{id}', 'Backend\StudentController@update')->name('admin.student.update');
		Route::get('/delete/{id}', 'Backend\StudentController@destroy')->name('admin.student.destroy');
		Route::get('/details/{id}', 'Backend\StudentController@details')->name('admin.student.details');
	});

	//Teacher Routes
	Route::group(['prefix' => 'teacher'], function(){
		Route::get('/', 'Backend\TeacherController@index')->name('admin.teacher');
		Route::get('/create', 'Backend\TeacherController@create')->name('admin.teacher.create');
		Route::post('/store', 'Backend\TeacherController@store')->name('admin.teacher.store');
		Route::get('/edit/{id}', 'Backend\TeacherController@edit')->name('admin.teacher.edit');
		Route::post('/update/{id}', 'Backend\TeacherController@update')->name('admin.teacher.update');
		Route::get('/delete/{id}', 'Backend\TeacherController@destroy')->name('admin.teacher.destroy');
		Route::get('/details/{id}', 'Backend\TeacherController@details')->name('admin.teacher.details');
	});

	//Parrent Routes
	Route::group(['prefix' => 'parrent'], function(){
		Route::get('/', 'Backend\ParrentController@index')->name('admin.parrent');
		Route::get('/create', 'Backend\ParrentController@create')->name('admin.parrent.create');
		Route::post('/store', 'Backend\ParrentController@store')->name('admin.parrent.store');
	});

	//Other's Routes
	Route::group(['prefix' => 'others'], function(){
		Route::get('/', 'Backend\OthersController@index')->name('admin.others');

		Route::group(['prefix' => 'add'], function(){
			Route::post('/important', 'Backend\IpController@store')->name('admin.others.add.important');

			Route::post('/outsider', 'Backend\OpController@store')->name('admin.others.add.outsider');
		});

		Route::group(['prefix' => 'list'], function(){
			Route::get('/important', 'Backend\IpController@show')->name('admin.others.list.important');
			Route::get('/outsider', 'Backend\OpController@show')->name('admin.others.list.outsider');
		});

		Route::group(['prefix' => 'edit'], function(){
			Route::get('/important/{id}', 'Backend\IpController@edit')->name('admin.others.edit.important');
			Route::get('/outsider/{id}', 'Backend\OpController@edit')->name('admin.others.edit.outsider');
		});

		Route::group(['prefix' => 'delete'], function(){
			Route::get('/important/{id}', 'Backend\IpController@destroy')->name('admin.others.delete.important');
			Route::get('/outsider/{id}', 'Backend\OpController@destroy')->name('admin.others.delete.outsider');
		});

		Route::group(['prefix' => 'update'], function(){
			Route::post('/important/{id}', 'Backend\IpController@update')->name('admin.others.update.important');
			Route::post('/outsider/{id}', 'Backend\OpController@update')->name('admin.others.update.outsider');
		});
	});

	//Class Routes
	Route::group(['prefix' => 'class'], function(){
		Route::get('/', 'Backend\ClassController@index')->name('admin.class');
		Route::get('/create', 'Backend\ClassController@create')->name('admin.class.create');
		Route::post('/store', 'Backend\ClassController@store')->name('admin.class.store');
		Route::get('/edit/{id}', 'Backend\ClassController@edit')->name('admin.class.edit');
		Route::post('/update/{id}', 'Backend\ClassController@update')->name('admin.class.update');
		Route::post('/delete/{id}', 'Backend\ClassController@destroy')->name('admin.class.delete');
	});

	//Subject Routes
	Route::group(['prefix' => 'subject'], function(){
		Route::get('/', 'Backend\SubjectController@index')->name('admin.subject');
		Route::get('/create', 'Backend\SubjectController@create')->name('admin.subject.create');
		Route::post('/store', 'Backend\SubjectController@store')->name('admin.subject.store');
		Route::get('/edit/{id}', 'Backend\SubjectController@edit')->name('admin.subject.edit');
		Route::post('/update/{id}', 'Backend\SubjectController@update')->name('admin.subject.update');
		Route::get('/delete/{id}', 'Backend\SubjectController@destroy')->name('admin.subject.delete');
	});

	//Exam Routes
	Route::group(['prefix' => 'exam'], function(){
		Route::get('/', 'Backend\ExamController@index')->name('admin.exam');
		Route::get('/create', 'Backend\ExamController@create')->name('admin.exam.create');
		Route::post('/store', 'Backend\ExamController@store')->name('admin.exam.store');
		Route::get('/edit/{id}', 'Backend\ExamController@edit')->name('admin.exam.edit');
		Route::post('/update/{id}', 'Backend\ExamController@update')->name('admin.exam.update');
		Route::get('/delete/{id}', 'Backend\ExamController@destroy')->name('admin.exam.delete');
	});


	//Sms Route
	Route::group(['prefix' => 'sms'], function(){
		Route::get('/', 'Backend\SmsController@index')->name('admin.sms');
		Route::get('/sendsms/{clas}/{month}/{message}', 'Backend\SmsController@sendSms');
		Route::get('/studentfee/{clas}/{month}', 'Backend\SmsController@studentfee')->name('studentfee');
		Route::get('/sendaware/{class}/{message}', 'Backend\SmsController@sendaware')->name('admin.sendaware');
		Route::post('/vip', 'Backend\SmsController@vipsms')->name('admin.sms.vip');
	});


	//Marks Routes
	Route::group(['prefix' => 'marks'], function(){
		Route::get('/', 'Backend\MarksController@index')->name('admin.marks');
		Route::get('/create', 'Backend\MarksController@create')->name('admin.marks.create');
		Route::post('/store', 'Backend\MarksController@store')->name('admin.marks.store');
		Route::get('/getstu', 'Backend\MarksController@getStudetails')->name('admin.marks.getStudetails');
		Route::post('/submitresult', 'Backend\MarksController@store')->name('admin.marks.store');
		Route::get('/viewmarks', 'Backend\MarksController@show')->name('admin.marks.viewmarks');
		Route::get('/printmarksheet', 'Backend\MarksController@print')->name('admin.print.marksheet');
	});

	//Accouinting Routes
	Route::group(['prefix' => 'balance'], function(){
		Route::get('/', 'Backend\BalanceController@index')->name('admin.balance');
	});
	Route::group(['prefix' => 'income'], function(){
		Route::get('/', 'Backend\IncomeController@index')->name('admin.income');
		Route::get('/month_filter/{year}/{month}', 'Backend\IncomeController@month_filter')->name('admin.income.month_fileter');
		Route::get('/roll_filter/{roll}', 'Backend\IncomeController@roll_filter')->name('admin.income.roll_filter');
		Route::get('/delete/{id}', 'Backend\IncomeController@destroy')->name('admin.income.delete');
		Route::get('/create', 'Backend\IncomeController@create')->name('admin.income.create');
		Route::post('/store', 'Backend\IncomeController@store')->name('admin.income.store');
		Route::post('/store/bank', 'Backend\IncomeController@store_bank')->name('admin.income.store.bank');
		Route::get('/category', 'Backend\IncomeCategoryController@index')->name('admin.income.category');
		Route::post('/category/store', 'Backend\IncomeCategoryController@store')->name('admin.income.category.store');

	});
	//Expence Route
	Route::group(['prefix' => 'expence'], function(){
		Route::get('/', 'Backend\ExpenceController@index')->name('admin.expence');
		Route::get('/create', 'Backend\ExpenceController@create')->name('admin.expence.create');
		Route::post('/store', 'Backend\ExpenceController@store')->name('admin.expence.store');
		Route::get('/destroy/{id}', 'Backend\ExpenceController@destroy')->name('admin.expence.destroy');
		Route::get('/month_filter/{year}/{month}', 'Backend\ExpenceController@month_filter')->name('admin.expence.month_fileter');
		Route::post('/store/withdraw', 'Backend\ExpenceController@withdraw')->name('admin.expence.withdraw');
		Route::get('/category', 'Backend\ExpenceCategoryController@index')->name('admin.expence.category');
		Route::post('/category/store', 'Backend\ExpenceCategoryController@store')->name('admin.expence.category.store');
	});

	//Director Route
	Route::group(['prefix' => 'director'], function(){
		Route::get('/', 'Backend\DirectorController@index')->name('admin.director');
		Route::post('/store', 'Backend\DirectorController@store')->name('admin.director.store');
		Route::get('/edit/{id}', 'Backend\DirectorController@edit')->name('admin.director.edit');
		Route::post('/update/{id}', 'Backend\DirectorController@update')->name('admin.director.update');
		Route::get('/delete/{id}', 'Backend\DirectorController@destroy')->name('admin.director.delete');
	});
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
