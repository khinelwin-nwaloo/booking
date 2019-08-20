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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',function(){
	return redirect('/home');
});

Auth::routes();

Route::get('admin/login', 'Auth\Admin_LoginController@showLoginForm');



/*For Website*/
Route::get('/home', 'HospitalController@home');
Route::get('/department', 'HospitalController@doctor');
Route::get('/about', 'HospitalController@about');
Route::get('/service', 'HospitalController@service');
Route::get('/contact', 'HospitalController@contact');

/*For Doctor*/
//Route::group(['middleware' => ['admin']], function () {

	Route::resource('doctors', 'DoctorController');
	Route::get('his_patients','DoctorController@history_patient');

	/*For Appointment*/
	Route::resource('appointments', 'AppointmentController');

	/*For Patient*/
	/*Route::resource('patient', 'PatientController');*/
	Route::get('/patient','PatientController@index');
	Route::get('/patient/history','PatientController@History');
	Route::get('/register', 'PatientController@register');
	Route::post('/patient/create', 'PatientController@store');
	Route::get('/login', 'PatientController@show_login');
	Route::post('/loginpatient', 'PatientController@login');
	//Route::post('/logout','Auth\PatientController@Logout');
	Route::post('/logout','PatientController@Logout');

	/*For Admin*/
	Route::get('/Admin_Login','AdminLoginController@adminlogin');
	Route::post('/adminLogin','AdminLoginController@Login');
	Route::post('/admin_logout','AdminLoginController@Logout');
	Route::get('/dashboard','HospitalController@dashboard');

	Route::get('/department/get_doctor','AppointmentController@get_department');
	Route::get('/department/get_duties','AppointmentController@get_duties');

	Route::get('/department/{id}','DepartmentController@get_doctor');

	Route::get('/appointment/doctor_remark/{id}','DoctorController@remark');
	Route::post('/appointment/dr_remark','DoctorController@save_remark');
	
//});

