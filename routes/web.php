<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\PublicController;
use App\Http\Controllers\Backend\Standard\WardController;
use App\Http\Controllers\Backend\Webpage\AboutController;
use App\Http\Controllers\Backend\Webpage\AdvertController;
use App\Http\Controllers\Backend\Standard\CountyController;
use App\Http\Controllers\Backend\Standard\GenderController;
use App\Http\Controllers\Backend\Webpage\FeatureController;
use App\Http\Controllers\Backend\Webpage\ServiceController;
use App\Http\Controllers\Backend\Standard\CountryController;
use App\Http\Controllers\Backend\Standard\PositionController;
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

// Route::get('/', function () {
//     return view('public.publicmaster');
// });
Route::get('/', [PublicController::class, 'index'])->name('public.index');

// Route::get('/{anypath}', 'HomeController@index')->where('path','.*');

Auth::routes();

Route::get('admin_home', [HomeController::class, 'index'])->name('adminhome');

    //     /*
    //      * User CRUD
    //      */
        Route::get('user/get', [UserController::class, 'index'])->name('user.index');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('user', [UserController::class, 'store'])->name('user.store');

    //     /*
    //      * Specific User
    //      */

            Route::get('user/show/{user}', [UserController::class, 'show'])->name('user.show');
            Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
            Route::patch('user/update/{user}', [UserController::class, 'update'])->name('user.update');
            Route::get('user/delete/{user}/', [UserController::class, 'destroy'])->name('user.destroy');

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

        //position
        Route::get('position/get', [PositionController::class, 'index'])->name('position.index');
        Route::get('position/get/list/{position}', [PositionController::class, 'PositionList'])->name('position.list-index');
        Route::post('position', [PositionController::class, 'store'])->name('position.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('position/show/{position}', [PositionController::class, 'show'])->name('position.show');
        Route::get('position/edit/{position}', [PositionController::class, 'edit'])->name('position.edit');
        Route::patch('position/update/{position}', [PositionController::class, 'update'])->name('position.update');
        Route::get('position/delete/{position}', [PositionController::class, 'destroy'])->name('position.destroy');

//gender
        Route::get('gender/get', [GenderController::class, 'index'])->name('gender.index');
        Route::get('gender/get/list/{gender}', [GenderController::class, 'GenderList'])->name('gender.list-index');
        Route::post('gender', [GenderController::class, 'store'])->name('gender.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('gender/show/{gender}', [GenderController::class, 'show'])->name('gender.show');
        Route::get('gender/edit/{gender}', [GenderController::class, 'edit'])->name('gender.edit');
        Route::patch('gender/update/{gender}', [GenderController::class, 'update'])->name('gender.update');
        Route::get('gender/delete/{gender}', [GenderController::class, 'destroy'])->name('gender.destroy');



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
        Route::get('servicemodel/latest', [ServiceModelController::class, 'latestservicemodels'])->name('servicemodel.latest');
        Route::patch('servicemodel/{servicemodel}', [ServiceModelController::class, 'store'])->name('servicemodel.store');
    //     /*
    //      * Specifics
    //      */
        Route::get('servicemodel/show/{servicemodel}', [ServiceModelController::class, 'show'])->name('servicemodel.show');
        Route::get('servicemodel/fetch/{servicemodel}', [ServiceModelController::class, 'ServiceModelsByServiceID'])->name('servicemodel.ServiceModelsByServiceID');
        Route::get('servicemodel/fetch/latest/{servicemodel}', [ServiceModelController::class, 'LatestServiceModelsByServiceID'])->name('servicemodel.latestServiceModelByServiceID');
        Route::get('servicemodel/fetch/latest/singlemodel/{servicemodel}', [ServiceModelController::class, 'LatestServiceModelsBySingleModelID'])->name('servicemodel.LatestServiceModelsBySingleModelID');
        Route::get('servicemodel/search', [ServiceModelController::class, 'search'])->name('servicemodel.search');
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




    //      // bureau
    //      Route::get('bureau/get', [BureauController::class, 'index'])->name('bureau.index');
    //      Route::get('bureaus/get/list', [BureauController::class, 'BureauList'])->name('bureau.list-index');
    //      Route::post('bureau/verify/info/', [BureauController::class, 'verifyBureauInfo'])->name('bureau.verify');
    //      Route::post('bureau/verify/director/', [BureauController::class, 'verifyDirectorInfo'])->name('bureau.verifydirector');
    //      Route::post('bureau', [BureauController::class, 'store'])->name('bureau.store');
    //  //     /*
    //  //      * Specifics
    //  //      */
    //      Route::get('bureau/show/{bureau}', [BureauController::class, 'show'])->name('bureau.show');
    //      Route::get('bureau/edit/{bureau}', [BureauController::class, 'edit'])->name('bureau.edit');
    //      Route::patch('bureau/updateverify/info/{bureau}', [BureauController::class, 'updateverifyBureauInfo'])->name('bureau.updateverify');
    //      Route::patch('bureau/updateverify/director/{bureau}', [BureauController::class, 'updateverifyDirectorInfo'])->name('bureau.updateverifydirector');
    //      Route::patch('bureau/update/{bureau}', [BureauController::class, 'update'])->name('bureau.update');
    //      Route::patch('singlebureau/update/{bureau}', [BureauController::class, 'singleupdate'])->name('bureau.update');
    //      Route::get('bureau/delete/{bureau}', [BureauController::class, 'destroy'])->name('bureau.destroy');

    //      // bureaudirector
    //      Route::get('bureaudirector/get', [BureauDirectorController::class, 'index'])->name('bureaudirector.index');
    //      Route::get('bureaudirectors/get', [BureauDirectorController::class, 'bureaus'])->name('bureaudirector.bureaus');
    //      Route::get('bureaudirector/get/list', [BureauDirectorController::class, 'bureaudirectorList'])->name('bureaudirector.list-index');
    //      Route::post('bureaudirector/verify/director/', [BureauDirectorController::class, 'verifyDirectorInfo'])->name('bureaudirector.verifydirector');
    //      Route::patch('bureaudirector/{bureaudirector}', [BureauDirectorController::class, 'store'])->name('bureaudirector.store');
    //  //     /*
    //  //      * Specifics
    //  //      */
    //      Route::get('bureaudirector/view/{bureaudirector}', [BureauDirectorController::class, 'view'])->name('bureaudirector.show');
    //      Route::get('bureaudirector/show/{bureaudirector}', [BureauDirectorController::class, 'show'])->name('bureaudirector.show');
    //      Route::get('bureaudirector/edit/{bureaudirector}', [BureauDirectorController::class, 'edit'])->name('bureaudirector.edit');
    //      Route::patch('bureaudirector/updateverify/director/{bureaudirector}', [BureauDirectorController::class, 'updateverifyDirectorInfo'])->name('bureaudirector.updateverifydirector');
    //      Route::patch('bureaudirector/update/{bureaudirector}', [BureauDirectorController::class, 'update'])->name('bureaudirector.update');
    //      Route::get('bureaudirector/delete/{bureaudirector}/', [BureauDirectorController::class, 'destroy'])->name('bureaudirector.destroy');

    //              // bureauadmin
    //      Route::get('bureauadmin/get', [BureauAdminController::class, 'index'])->name('bureauadmin.index');
    //      Route::get('bureauadmins/get', [BureauAdminController::class, 'bureaus'])->name('bureauadmin.bureaus');
    //      Route::get('bureauadmin/get/list', [BureauAdminController::class, 'bureauadminList'])->name('bureauadmin.list-index');
    //      Route::post('bureauadmin/verify/admin/', [BureauAdminController::class, 'verifyAdminInfo'])->name('bureauadmin.verifyadmin');
    //      Route::patch('bureauadmin/{bureaudirector}', [BureauAdminController::class, 'store'])->name('bureauadmin.store');
    //  //     /*
    //  //      * Specifics
    //  //      */
    //      Route::get('bureauadmin/show/{bureauadmin}', [BureauAdminController::class, 'show'])->name('bureauadmin.show');
    //      Route::get('bureauadmin/edit/{bureauadmin}', [BureauAdminController::class, 'edit'])->name('bureauadmin.edit');
    //      Route::patch('bureauadmin/updateverify/admin/{bureauadmin}', [BureauAdminController::class, 'updateverifyAdminInfo'])->name('bureauadmin.updateverifyadmin');
    //      Route::patch('bureauadmin/update/{bureauadmin}', [BureauAdminController::class, 'update'])->name('bureauadmin.update');
    //      Route::get('bureauadmin/delete/{bureauadmin}/', [BureauAdminController::class, 'destroy'])->name('bureauadmin.destroy');

    //                  // househelp
    //      Route::get('househelp/get', [HousehelpController::class, 'index'])->name('househelp.index');
    //      Route::get('househelps/get', [HousehelpController::class, 'bureaus'])->name('househelp.bureaus');
    //      Route::get('househelp/get/list', [HousehelpController::class, 'househelpList'])->name('househelp.list-index');
    //      Route::post('househelp/verify/kin/', [HousehelpController::class, 'verifyKinInfo'])->name('househelp.verifykin');
    //      Route::patch('househelp/{bureaudirector}', [HousehelpController::class, 'store'])->name('househelp.store');
    //  //     /*
    //  //      * Specifics
    //  //      */
    //      Route::get('househelp/show/{househelp}', [HousehelpController::class, 'show'])->name('househelp.show');
    //      Route::get('househelp/edit/{househelp}', [HousehelpController::class, 'edit'])->name('househelp.edit');
    //      Route::patch('househelp/updateverify/kin/{househelp}', [HousehelpController::class, 'updateverifyKinInfo'])->name('househelp.updateverifykin');
    //      Route::patch('househelp/update/{househelp}', [HousehelpController::class, 'update'])->name('househelp.update');
    //      Route::get('househelp/delete/{househelp}/', [HousehelpController::class, 'destroy'])->name('househelp.destroy');



