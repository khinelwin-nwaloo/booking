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

/*For Website*/
Route::get('/home', 'HospitalController@home');
Route::get('/department', 'HospitalController@doctor');
Route::get('/about', 'HospitalController@about');
Route::get('/service', 'HospitalController@service');
// Route::get('/department', 'HospitalController@department');
Route::get('/contact', 'HospitalController@contact');

/*For Doctor*/
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
Route::post('/logout','PatientController@Logout');

/*For Admin*/
Route::get('/Admin_Login','LoginController@adminlogin');
Route::post('/adminLogin','LoginController@Login');
Route::post('/admin_logout','LoginController@Logout');
Route::get('/dashboard','HospitalController@dashboard');

Route::get('/department/get_doctor','AppointmentController@get_department');
Route::get('/department/get_duties','AppointmentController@get_duties');

Route::get('/department/{id}','DepartmentController@get_doctor');

