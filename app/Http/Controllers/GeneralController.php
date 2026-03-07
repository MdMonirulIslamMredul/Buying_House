<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\BannerAndTitle;
use App\Models\Counter;
use App\Models\FooterDetail;
use App\Models\Logo;
use App\Models\Patnar;
use App\Models\User;
use App\Models\WebsiteLinks;
use Illuminate\Http\Request;
use Auth;

class GeneralController extends Controller
{
    public function general_settings()
    {
        return view('admin.general.general',[
            'banner_titles'=>BannerAndTitle::get(),
            'logo'=>Logo::latest()->first(),
            'links'=>WebsiteLinks::latest()->first(),
            'counter'=>Counter::latest()->first(),
            'footer'=>FooterDetail::latest()->first(),
            'banners'=>Banner::get(),
        ]);
    }

    public function profile_settings()
    {
//        return User::where('id',Auth::user()->id)->first();
        return view('admin.profile.profile',[
            'user'=>User::where('id',Auth::user()->id)->first(),
        ]);
    }

    public function update_profile(Request $request)
    {

        User::update_profile($request);
        return back()->with('message','profile updated successfully');
    }
    public function partner_add(){
        $data1 = Patnar::get();
          return view('admin.partner',compact(['data1']));
    }

    public function partner_store(Request $request){
        $image = $request->file('image');

        // Generate a unique name for the file
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Move the uploaded file to the public directory
        $image->move(public_path('partner'), $imageName);
        $data= new Patnar();
        $data->image = $imageName;
        // dd($data);
        $data->save();
        return redirect()->back()->with('success', 'upload successfull');
    }

    public function partner_delete($id){
            $data2 = Patnar::find($id);
            $data2->delete();
            return redirect()->back()->with('success', 'delete successfull');

    }
}
