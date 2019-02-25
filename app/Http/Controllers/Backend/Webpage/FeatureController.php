<?php

namespace App\Http\Controllers\Backend\Webpage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Standard\Webservices\Feature;



class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->check()) {
            //organisation
            if (auth()->user()->hasRole('Organisation Director')) {
                $organisation= Auth::user()-> organisationdirectors()->first();
                $feature = Feature::with('user', 'organisation')
                ->where('organisation_id', $organisation->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Organisation Superadmin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                $feature = Feature::with('user', 'organisation')
                ->where('organisation_id', $organisation->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Organisation Admin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                $feature = Feature::with('user', 'organisation')
                ->where('organisation_id', $organisation->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Organisation Accountant')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                $feature = Feature::with('user', 'organisation')
                ->where('organisation_id', $organisation->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            //bureau
            if (auth()->user()->hasRole('Bureau Director')) {
                $bureau= Auth::user()-> bureaudirectors()->first();
                $feature = Feature::with('user', 'bureau')
                ->where('bureau_id', $bureau->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Bureau Superadmin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                $feature = Feature::with('user', 'bureau')
                ->where('bureau_id', $bureau->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Bureau Admin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                $feature = Feature::with('user', 'bureau')
                ->where('bureau_id', $bureau->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
            if (auth()->user()->hasRole('Bureau Accountant')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                $feature = Feature::with('user', 'bureau')
                ->where('bureau_id', $bureau->id)
                ->get();
                return response()-> json([
                    'feature' => $feature,
                ], 200);
            }
        }
    }
    public function organisations()//all features linked to organisation
    {
        $features = Feature::with('user', 'organisation')
                    // ->where('abouts.organisation_id', $organisation->id)
                    ->get();
        // dd($about);
        return response()-> json([
        'features' => $features,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request,[
            'title' => 'required|min:2',
            'subtitle' => 'required|min:2',
            'details' => 'required',
            // 'organisation_id' => 'required',
            // 'bureau_id' => 'required',
        ]);

        $feature = new Feature();
        $feature->title = $request ->title;
        $feature->subtitle = $request ->subtitle;
        $feature->details = $request ->details;

        //getting Organisation $user
        if (auth()->check()) {
            if (auth()->user()->hasRole('Organisation Director')) {
                $organisation= Auth::user()-> organisationdirectors()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Superadmin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Admin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Accountant')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                //then
                $user = Auth::user();
                $feature->organisation_id = $organisation ->id;
                $feature->user_id = $user ->id;
            }
            //bureau
            if (auth()->user()->hasRole('Bureau Director')) {
                $bureau= Auth::user()-> bureaudirectors()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Superadmin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Admin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Accountant')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                //then
                $user = Auth::user();
                $feature->bureau_id = $bureau ->id;
                $feature->user_id = $user ->id;
            }
        }

        $strpos = strpos($request->feature_image, ';'); //positionof image name semicolon
        $sub = substr($request->feature_image, 0, $strpos);
        $ex = explode('/', $sub)[1];
        $name = time().".".$ex;

        $Path = public_path()."/assets/organisation/img/website/features";
            $img = Image::make($request->feature_image);
//            $img->crop(300, 150, 25, 25);
            $img ->save($Path.'/'.$name);
        $feature->feature_image = $name;
        //end processing photo and size
        $feature->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlefeature = Feature::find($id);
        // dd($organisation);
        return response()-> json([
            'singlefeature' => $singlefeature,
        ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);
        // dd($organisation);
        return response()-> json([
            'feature' => $feature,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feature = Feature::findOrFail($id);
        $this->validate($request,[
            'title' => 'required|min:2',
            'subtitle' => 'required|min:2',
            'details' => 'required',
        ]);

        $feature->title = $request ->title;
        $feature->subtitle = $request ->subtitle;
        $feature->details = $request ->details;
        //getting Organisation $user, about_id
        if (auth()->check()) {
            if (auth()->user()->hasRole('Organisation Director')) {
                $organisation= Auth::user()-> organisationdirectors()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Superadmin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Admin')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->organisation_id = $organisation ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Organisation Accountant')) {
                $organisation= Auth::user()-> organisationemployees()->first();
                //then
                $user = Auth::user();
                $feature->organisation_id = $organisation ->id;
                $feature->user_id = $user ->id;
            }
            //bureau
            if (auth()->user()->hasRole('Bureau Director')) {
                $bureau= Auth::user()-> bureaudirectors()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Superadmin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Admin')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                 //then
                 $user = Auth::user();
                 $feature->bureau_id = $bureau ->id;
                 $feature->user_id = $user ->id;
            }
            if (auth()->user()->hasRole('Bureau Accountant')) {
                $bureau= Auth::user()-> bureauemployees()->first();
                //then
                $user = Auth::user();
                $feature->bureau_id = $bureau ->id;
                $feature->user_id = $user ->id;
            }
        }
        $currentfeature_image =  $feature->feature_image;

         //processing feature_image nme and size
        if($request->feature_image != $currentfeature_image){
            $Path = public_path()."/assets/organisation/img/website/features";

            $currentFeature_image = $Path. $currentfeature_image;
            //deleting if exists
                if(file_exists($currentFeature_image)){
                    @unlink($currentFeature_image);
                }
                $strpos = strpos($request->feature_image, ';'); //positionof image name semicolon
                $sub = substr($request->feature_image, 0, $strpos);
                $ex = explode('/', $sub)[1];
                $name = time().".".$ex;

                $img = Image::make($request->feature_image);
                $img ->save($Path.'/'.$name);

        }else{
            $name = $feature->feature_image;
        }
        $feature->feature_image = $name;
        $feature->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);
        //image inline with this organisation
        $Path = public_path()."/assets/organisation/img/website/features";

        $Feature_image = $Path. $feature->feature_image;

        if(file_exists($Feature_image)){
            @unlink($Feature_image);
        }
        $feature->delete();
    }
}


