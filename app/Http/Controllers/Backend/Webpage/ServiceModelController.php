<?php

namespace App\Http\Controllers\Backend\Webpage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Standard\Webservices\Service;
use App\Models\Standard\Webservices\ServiceModel;


class ServiceModelController extends Controller
{
    public function index()
    {

                $servicemodels = ServiceModel::with('user', 'service')
                ->get();
                return response()-> json([
                    'servicemodels' => $servicemodels,
                ], 200);
    }
    public function organisations()//all servicemodels linked to organisation
    {
        $servicemodels = ServiceModel::with('user', 'service')
                    // ->where('abouts.service_id', $organisation->id)
                    ->get();
        // dd($about);
        return response()-> json([
        'servicemodels' => $servicemodels,
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
    public function store(Request $request, $id)
    {

        $this->validate($request,[
            'title' => 'required|min:2',
            'details' => 'required|min:2',

        ]);
        // $me = Auth::user()->id;

        $service = Service::find($id);


            $servicemodel = new ServiceModel();
            $servicemodel->title = $request ->title;
            $servicemodel->details = $request ->details;

            $user = Auth::user();
            $servicemodel->service_id = $service->id;
            $servicemodel->user_id = $user ->id;

            $strpos = strpos($request->image, ';'); //positionof image name semicolon
            $sub = substr($request->image, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time().".".$ex;

            $Path = public_path()."/assets/organisation/img/website/services/servicemodels";
                $img = Image::make($request->image);
            //            $img->crop(300, 150, 25, 25);
                $img ->save($Path.'/'.$name);
            $servicemodel->image = $name;
            //end processing photo and size

        $servicemodel->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleservicemodel = ServiceModel::with('user', 'service')
                                ->find($id);
        return response()-> json([
            'singleservicemodel' => $singleservicemodel,
        ], 200);
    }

    public function ServiceModelByServiceID($id)
    {
        $servicemodelsbyid = ServiceModel::with('user', 'service')->where('service_id', $id)
                                ->orderBy('id', 'desc')
                                ->get();
        return response()-> json([
            'servicemodelsbyid' => $servicemodelsbyid,
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
        // $organisation = (Auth::user()-> organisationemployeeusers()->first()->organisation()->first());
        // $service = $organisation->services()->first();

        $servicemodel = ServiceModel::with('user', 'service')
                                ->find($id);
        // dd($organisation);
        return response()-> json([
            'servicemodel' => $servicemodel,
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
        $servicemodel = ServiceModel::findOrFail($id);


        $this->validate($request,[
            'title' => 'required|min:2',
            'details' => 'required|min:2',
        ]);

        $servicemodel->title = $request ->title;
        $servicemodel->details = $request ->details;
        //getting Organisation $user, about_id
        $user = Auth::user();
        $servicemodel->user_id = $user ->id;
        $currentimage =  $servicemodel->image;

        //processing image nme and size
            if($request->image != $currentimage){
                $Path = public_path()."/assets/organisation/img/website/services/servicemodels";

                $currentImage = $Path. $currentimage;


                //deleting if exists
                    if(file_exists($currentImage)){
                        @unlink($currentImage);
                    }
                    // if(File::exists($image_path)) {
                    //     File::delete($image_path);
                    // }

                    $strpos = strpos($request->image, ';'); //positionof image name semicolon
                    $sub = substr($request->image, 0, $strpos);
                    $ex = explode('/', $sub)[1];
                    $name = time().".".$ex;

                    $img = Image::make($request->image);
                    $img ->save($Path.'/'.$name);

                    $servicemodel->image = $name;
            }else{
                $name = $servicemodel->image;
            }

       $servicemodel->save();
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $servicemodel = ServiceModel::findOrFail($id);
       //image inline with this organisation
       $Path = public_path()."/assets/organisation/img/website/services/servicemodels";

       $Image = $Path. $servicemodel->image;

       if(file_exists($Image)){
           @unlink($Image);
       }
       $servicemodel->delete();
   }







}

