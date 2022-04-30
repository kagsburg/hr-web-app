
<?php
use App\Notifications\ ContractReminder;
use App\User;

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

Route::get('/superadmin', 'superAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/supervisor', 'Supervisor@index')->name('supervisor')->middleware('supervisor');
Route::get('/HOD', 'TeamController@index')->name('HOD')->middleware('HOD');
Route::get('/academy', 'AcademicController@index')->name('academy')->middleware('academy');


Route::get('/', function () {
   //User::find(1)->notify( new ContractReminder);
    return view('welcome');
});
 Route::post("/login","login@index");
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::resource('disciplainaryStatuses', 'Disciplainary_statusController');
Route::get('findCityWithDepartmentID/{id}', 'DivisionsController@findCityWithDepartmentID');
Route::get('{id}/approval','employeeleaveController@approval')->name('approval');
Route::resource('contractStatuses', 'Contract_statusController');
Route::resource('employeeleave', 'employeeleaveController');
Route::resource('supervisor', 'Supervisor');
Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified');



Route::resource('roles', 'RolesController');
Auth::routes(['verify' => true]);

Route::resource('contracts', 'ContractsController');

Route::resource('employees', 'EmployeesController');

Route::resource('disciplainaries', 'DisciplainaryController');

Route::resource('departments', 'DepartmentsController');

Route::resource('divisions', 'DivisionsController');

Route::resource('medicalinsurances', 'MedicalinsuranceController');

Route::resource('insurancecompensations', 'insurancecompensationController');