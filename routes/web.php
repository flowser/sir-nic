<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Standard\WardController;
use App\Http\Controllers\Backend\Webpage\AboutController;
use App\Http\Controllers\Backend\Webpage\AdvertController;
use App\Http\Controllers\Backend\Standard\CountyController;
use App\Http\Controllers\Backend\Webpage\FeatureController;
use App\Http\Controllers\Backend\Webpage\ServiceController;
use App\Http\Controllers\Backend\Standard\CountryController;
use App\Http\Controllers\Backend\Webpage\ServiceModelController;
use App\Http\Controllers\Backend\Standard\ConstituencyController;
use App\Http\Controllers\Backend\Organisation\Superadmin\RoleController;
use App\Http\Controllers\Backend\Organisation\Superadmin\UserController;
use App\Http\Controllers\Backend\Organisation\Admin\OrgEmployeeController;
use App\Http\Controllers\Backend\Organisation\Superadmin\OrgAdminController;
use App\Http\Controllers\Backend\Organisation\Superadmin\PermissionController;
use App\Http\Controllers\Backend\Organisation\Superadmin\OrgDirectorController;
use App\Http\Controllers\Backend\Organisation\Superadmin\OrganisationController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// *
//  * All route names are prefixed with 'admin.auth'.
//  */
// Route::group([
//     // 'prefix'     => 'auth',
//     // 'as'         => 'auth.',
//     // 'namespace'  => 'Auth',
//     // 'middleware' => 'role:'.config('access.users.admin_role'),
// ], function () {

//     Route::group(['namespace' => 'Organisation'], function () {
//         /*
//        * Organisation Status'
//        */
//         Route::get('organisation/deactivated', [OrganisationstatusController::class, 'getdeactivated'])->name('organisation.deactivated');
//         Route::get('organisation/deleted', [OrganisationstatusController::class, 'getDeleted'])->name('organisation.deleted');
//         Route::get('organisation/mark/{id}', [OrganisationstatusController::class, 'mark'])->name('organisation.mark');
//         // Access
//         /*
//         * Organisation CRUD
//         */
//         Route::get('organisation', [OrganisationController::class, 'index'])->name('organisation.index');
//         Route::get('organisation/create', [OrganisationController::class, 'create'])->name('organisation.create');
//         Route::post('organisation', [OrganisationController::class, 'store'])->name('organisation.store');

//         /*
//          * Specific Organisation
//          */
//         Route::group(['prefix' => 'organisation/{organisation}'], function () {
//             // Deleted
//             Route::get('delete', [OrganisationstatusController::class, 'delete'])->name('organisation.delete-permanently');
//             Route::get('restore', [OrganisationstatusController::class, 'restore'])->name('organisation.restore');
// //            Route::get('/', [OrganisationController::class, 'show'])->name('organisation.show');
//             Route::get('edit', [OrganisationController::class, 'edit'])->name('organisation.edit');
//             Route::patch('/', [OrganisationController::class, 'update'])->name('organisation.update');
//             Route::get('/takedown', [OrganisationController::class, 'takedown'])->name('organisation.takedown');
//         });
//     });

    /*
     * User Management
     */
    // Route::group(['namespace' => 'User'], function () {

    //     /*
    //      * User Status'
    //      */
    //     Route::get('user/deactivated', [UserStatusController::class, 'getDeactivated'])->name('user.deactivated');
    //     Route::get('user/deleted', [UserStatusController::class, 'getDeleted'])->name('user.deleted');

    //     /*
    //      * User CRUD
    //      */
        Route::get('user/get', [UserController::class, 'index'])->name('user.index');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('user', [UserController::class, 'store'])->name('user.store');

    //     /*
    //      * Specific User
    //      */
    //     Route::get('/', [UserController::class, 'show'])->name('user.show');
    //     Route::group(['prefix' => 'user/{user}'], function () {
    //         // User
            Route::get('user/show/{user}', [UserController::class, 'show'])->name('user.show');
            Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
            Route::patch('user/update/{user}', [UserController::class, 'update'])->name('user.update');
            Route::get('user/delete/{user}/', [UserController::class, 'destroy'])->name('user.destroy');

    //         // Account
    //         Route::get('account/confirm/resend', [UserConfirmationController::class, 'sendConfirmationEmail'])->name('user.account.confirm.resend');

    //         // Status
    //         Route::get('mark/{status}', [UserStatusController::class, 'mark'])->name('user.mark')->where(['status' => '[0,1]']);

    //         // Social
    //         Route::get('social/{social}/unlink', [UserSocialController::class, 'unlink'])->name('user.social.unlink');

    //         // Confirmation
    //         Route::get('confirm', [UserConfirmationController::class, 'confirm'])->name('user.confirm');
    //         Route::get('unconfirm', [UserConfirmationController::class, 'unconfirm'])->name('user.unconfirm');

    //         // Password
    //         Route::get('password/change', [UserPasswordController::class, 'edit'])->name('user.change-password');
    //         Route::patch('password/change', [UserPasswordController::class, 'update'])->name('user.change-password.post');

    //         // Access
    //         Route::get('login-as', [UserAccessController::class, 'loginAs'])->name('user.login-as');

    //         // Session
    //         Route::get('clear-session', [UserSessionController::class, 'clearSession'])->name('user.clear-session');

    //         // Deleted
    //         Route::get('delete', [UserStatusController::class, 'delete'])->name('user.delete-permanently');
    //         Route::get('restore', [UserStatusController::class, 'restore'])->name('user.restore');
    //     });
    // });

    /*
     * Permission Management
     */
    Route::group(['namespace' => 'Permission'], function () {
        Route::get('permission-list', [PermissionController::class, 'index'])->name('permission.index');
        // Route::get('permission/create', [RoleController::class, 'create'])->name('permission.create');
        Route::post('add-permission', [PermissionController::class, 'store'])->name('permission.store');

        Route::group(['prefix' => 'permission'], function () {
            Route::get('/edit/{permission}', [PermissionController::class, 'edit'])->name('permission.edit');
            Route::patch('/update/{permission}', [PermissionController::class, 'update'])->name('permission.update');
            Route::get('/delete/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy');
        });
    });
    /*
     * Role Management
     */
    Route::group(['namespace' => 'Role'], function () {
        Route::get('role-list', [RoleController::class, 'index'])->name('role.index');
        Route::post('add-role', [RoleController::class, 'store'])->name('role.store');

        Route::group(['prefix' => 'role'], function () {
            Route::get('/edit/{role}', [RoleController::class, 'edit'])->name('role.edit');
            Route::patch('/update/{role}', [RoleController::class, 'update'])->name('role.update');
            Route::get('/delete/{role}', [RoleController::class, 'destroy'])->name('role.destroy');
        });
    });
    /*
     * Country Management
     */
        Route::get('country/get', [CountryController::class, 'index'])->name('country.index');
        Route::post('country', [CountryController::class, 'store'])->name('country.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('country/show/{country}', [CountryController::class, 'show'])->name('country.show');
        Route::get('country/edit/{country}', [CountryController::class, 'edit'])->name('country.edit');
        Route::patch('country/update/{country}', [CountryController::class, 'update'])->name('country.update');
        Route::get('country/delete/{country}/', [CountryController::class, 'destroy'])->name('country.destroy');


        Route::get('county/get', [CountyController::class, 'index'])->name('county.index');
        Route::post('county', [CountyController::class, 'store'])->name('county.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('county/get/list/{county}', [CountyController::class, 'CountyList'])->name('county.list-index');//fetch county list bsedon country id
        Route::get('county/show/{county}', [CountyController::class, 'show'])->name('county.show');
        Route::get('county/edit/{county}', [CountyController::class, 'edit'])->name('county.edit');
        Route::patch('county/update/{county}', [CountyController::class, 'update'])->name('county.update');
        Route::get('county/delete/{county}/', [CountyController::class, 'destroy'])->name('county.destroy');

        //constituency
        Route::get('constituency/get', [ConstituencyController::class, 'index'])->name('constituency.index');
        Route::post('constituency', [ConstituencyController::class, 'store'])->name('constituency.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('constituency/get/list/{constituency}', [ConstituencyController::class, 'ConstituencyList'])->name('constituency.list-index');//fetch county list bsedon country id
        Route::get('constituency/show/{constituency}', [ConstituencyController::class, 'show'])->name('constituency.show');
        Route::get('constituency/edit/{constituency}', [ConstituencyController::class, 'edit'])->name('constituency.edit');
        Route::patch('constituency/update/{constituency}', [ConstituencyController::class, 'update'])->name('constituency.update');
        Route::get('constituency/delete/{constituency}/', [ConstituencyController::class, 'destroy'])->name('constituency.destroy');

//ward
        Route::get('ward/get', [WardController::class, 'index'])->name('ward.index');
        Route::get('ward/get/list/{ward}', [WardController::class, 'WardList'])->name('ward.list-index');
        Route::post('ward', [WardController::class, 'store'])->name('ward.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('ward/show/{ward}', [WardController::class, 'show'])->name('ward.show');
        Route::get('ward/edit/{ward}', [WardController::class, 'edit'])->name('ward.edit');
        Route::patch('ward/update/{ward}', [WardController::class, 'update'])->name('ward.update');
        Route::get('ward/delete/{ward}', [WardController::class, 'destroy'])->name('ward.destroy');


        // organisation
        Route::get('organisation/get', [OrganisationController::class, 'index'])->name('organisation.index');
        Route::get('organisation/get/list', [OrganisationController::class, 'OrganisationList'])->name('organisation.list-index');
        Route::post('organisation/verify/info/', [OrganisationController::class, 'verifyOrganisationInfo'])->name('organisation.verify');
        Route::post('organisation/verify/director/', [OrganisationController::class, 'verifyDirectorInfo'])->name('organisation.verifydirector');
        Route::post('organisation', [OrganisationController::class, 'store'])->name('organisation.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('organisation/show/{organisation}', [OrganisationController::class, 'show'])->name('organisation.show');
        Route::get('organisation/edit/{organisation}', [OrganisationController::class, 'edit'])->name('organisation.edit');
        Route::patch('organisation/updateverify/info/{organisation}', [OrganisationController::class, 'updateverifyOrganisationInfo'])->name('organisation.updateverify');
        Route::patch('organisation/updateverify/director/{organisation}', [OrganisationController::class, 'updateverifyDirectorInfo'])->name('organisation.updateverifydirector');
        Route::patch('organisation/update/{organisation}', [OrganisationController::class, 'update'])->name('organisation.update');
        Route::get('organisation/delete/{organisation}', [OrganisationController::class, 'destroy'])->name('organisation.destroy');

        // orgdirector
        Route::get('orgdirector/get', [OrgDirectorController::class, 'index'])->name('orgdirector.index');
        Route::get('orgdirectors/get', [OrgDirectorController::class, 'organisations'])->name('orgdirector.organisations');
        Route::get('orgdirector/get/list', [OrgDirectorController::class, 'orgdirectorList'])->name('orgdirector.list-index');
        Route::post('orgdirector/verify/director/', [OrgDirectorController::class, 'verifyDirectorInfo'])->name('orgdirector.verifydirector');
        Route::patch('orgdirector/{orgdirector}', [OrgDirectorController::class, 'store'])->name('orgdirector.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('orgdirector/show/{orgdirector}', [OrgDirectorController::class, 'show'])->name('orgdirector.show');
        Route::get('orgdirector/edit/{orgdirector}', [OrgDirectorController::class, 'edit'])->name('orgdirector.edit');
        Route::patch('orgdirector/updateverify/director/{orgdirector}', [OrgDirectorController::class, 'updateverifyDirectorInfo'])->name('orgdirector.updateverifydirector');
        Route::patch('orgdirector/update/{orgdirector}', [OrgDirectorController::class, 'update'])->name('orgdirector.update');
        Route::get('orgdirector/delete/{orgdirector}/', [OrgDirectorController::class, 'destroy'])->name('orgdirector.destroy');

                // orgadmin
        Route::get('orgadmin/get', [OrgAdminController::class, 'index'])->name('orgadmin.index');
        Route::get('orgadmins/get', [OrgAdminController::class, 'organisations'])->name('orgadmin.organisations');
        Route::get('orgadmin/get/list', [OrgAdminController::class, 'orgadminList'])->name('orgadmin.list-index');
        Route::post('orgadmin/verify/admin/', [OrgAdminController::class, 'verifyAdminInfo'])->name('orgadmin.verifyadmin');
        Route::patch('orgadmin/{orgadmin}', [OrgAdminController::class, 'store'])->name('orgadmin.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('orgadmin/show/{orgadmin}', [OrgAdminController::class, 'show'])->name('orgadmin.show');
        Route::get('orgadmin/edit/{orgadmin}', [OrgAdminController::class, 'edit'])->name('orgadmin.edit');
        Route::patch('orgadmin/updateverify/admin/{orgadmin}', [OrgAdminController::class, 'updateverifyAdminInfo'])->name('orgadmin.updateverifyadmin');
        Route::patch('orgadmin/update/{orgadmin}', [OrgAdminController::class, 'update'])->name('orgadmin.update');
        Route::get('orgadmin/delete/{orgadmin}/', [OrgAdminController::class, 'destroy'])->name('orgadmin.destroy');

                // orgemployee
        Route::get('orgemployee/get', [OrgEmployeeController::class, 'index'])->name('orgemployee.index');
        Route::get('orgemployees/get', [OrgEmployeeController::class, 'organisations'])->name('orgemployee.organisations');
        Route::get('orgemployee/get/list', [OrgEmployeeController::class, 'orgemployeeList'])->name('orgemployee.list-index');
        Route::post('orgemployee/verify/employee/', [OrgEmployeeController::class, 'verifyEmployeeInfo'])->name('orgemployee.verifyemployee');
        Route::patch('orgemployee/{orgemployee}', [OrgEmployeeController::class, 'store'])->name('orgemployee.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('orgemployee/show/{orgemployee}', [OrgEmployeeController::class, 'show'])->name('orgemployee.show');
        Route::get('orgemployee/edit/{orgemployee}', [OrgEmployeeController::class, 'edit'])->name('orgemployee.edit');
        Route::patch('orgemployee/updateverify/employee/{orgemployee}', [OrgEmployeeController::class, 'updateverifyEmployeeInfo'])->name('orgemployee.updateverifyemployee');
        Route::patch('orgemployee/update/{orgemployee}', [OrgEmployeeController::class, 'update'])->name('orgemployee.update');
        Route::get('orgemployee/delete/{orgemployee}/', [OrgEmployeeController::class, 'destroy'])->name('orgemployee.destroy');



        // about
        Route::get('about/get', [AboutController::class, 'index'])->name('about.index');
        Route::get('abouts/get', [AboutController::class, 'organisations'])->name('about.organisations');
        Route::get('about/get/list', [AboutController::class, 'aboutList'])->name('about.list-index');
        Route::post('about', [AboutController::class, 'store'])->name('about.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('about/show/{about}', [AboutController::class, 'show'])->name('about.show');
        Route::get('about/edit/{about}', [AboutController::class, 'edit'])->name('about.edit');
        Route::patch('about/update/{about}', [AboutController::class, 'update'])->name('about.update');
        Route::get('about/delete/{about}/', [AboutController::class, 'destroy'])->name('about.destroy');

        // service
        Route::get('service/get', [ServiceController::class, 'index'])->name('service.index');
        Route::get('service/get/list', [ServiceController::class, 'organisations'])->name('service.list-index');
        Route::post('service', [ServiceController::class, 'store'])->name('service.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('service/show/{service}', [ServiceController::class, 'show'])->name('service.show');
        Route::get('service/edit/{service}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::patch('service/update/{service}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('service/delete/{service}/', [ServiceController::class, 'destroy'])->name('service.destroy');


                // servicemodel
        Route::get('servicemodel/get', [ServiceModelController::class, 'index'])->name('servicemodel.index');
        Route::get('servicemodel/get/list', [ServiceModelController::class, 'organisations'])->name('servicemodel.list-index');
        Route::patch('servicemodel/{servicemodel}', [ServiceModelController::class, 'store'])->name('servicemodel.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('servicemodel/show/{servicemodel}', [ServiceModelController::class, 'show'])->name('servicemodel.show');
        Route::get('servicemodel/get/{servicemodel}', [ServiceModelController::class, 'ServiceModelByServiceID'])->name('servicemodel.ServiceModelByServiceID');
        Route::get('servicemodel/edit/{servicemodel}', [ServiceModelController::class, 'edit'])->name('servicemodel.edit');
        Route::patch('servicemodel/update/{servicemodel}', [ServiceModelController::class, 'update'])->name('servicemodel.update');
        Route::get('servicemodel/delete/{servicemodel}/', [ServiceModelController::class, 'destroy'])->name('servicemodel.destroy');


        // features
        Route::get('feature/get', [FeatureController::class, 'index'])->name('feature.index');
        Route::get('features/get', [FeatureController::class, 'organisations'])->name('feature.organisations');
        Route::get('feature/get/list', [FeatureController::class, 'aboutList'])->name('feature.list-index');
        Route::post('feature', [FeatureController::class, 'store'])->name('feature.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('feature/show/{feature}', [FeatureController::class, 'show'])->name('feature.show');
        Route::get('feature/edit/{feature}', [FeatureController::class, 'edit'])->name('feature.edit');
        Route::patch('feature/update/{feature}', [FeatureController::class, 'update'])->name('feature.update');
        Route::get('feature/delete/{feature}/', [FeatureController::class, 'destroy'])->name('feature.destroy');

        // adverts
        Route::get('advert/get', [AdvertController::class, 'index'])->name('advert.index');
        Route::get('adverts/get', [AdvertController::class, 'organisations'])->name('advert.organisations');
        Route::get('advert/get/list', [AdvertController::class, 'aboutList'])->name('advert.list-index');
        Route::post('advert', [AdvertController::class, 'store'])->name('advert.store');
        //     /*
        //      * Specifics
        //      */
        Route::get('advert/show/{advert}', [AdvertController::class, 'show'])->name('advert.show');
        Route::get('advert/edit/{advert}', [AdvertController::class, 'edit'])->name('advert.edit');
        Route::patch('advert/update/{advert}', [AdvertController::class, 'update'])->name('advert.update');
        Route::get('advert/delete/{advert}/', [AdvertController::class, 'destroy'])->name('advert.destroy');





// });


