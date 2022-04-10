<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\Media;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $categories=Categorie::all();
        return view('dashboard',['categories'=>$categories]);
    }
    public function videos()
    {
        $categories=Categorie::all();
        $videos=Video::all()->where('user_id',"=",Auth::user()->id);
        return view('videos',['categories'=>$categories,'videos'=>$videos]);

    }
    public function images()
    {
        $categories=Categorie::all();
        $images=Image::all()->where('user_id',"=",Auth::user()->id);
        
        return view('images',['categories'=>$categories,'images'=>$images]);

    }

    public function files()
    {
        $categories=Categorie::all();
        $files=Media::all()->where('user_id',"=",Auth::user()->id);
        
        return view('files',['categories'=>$categories,'files'=>$files]);

    }
    public function categorie($id)
    {
        $categories=Categorie::all();
        $files=Media::all()->where('user_id',"=",Auth::user()->id)->where('categorie_id',$id);
        $name=Categorie::find($id)->name ?? '';
        
        return view('categories',['categories'=>$categories,'files'=>$files,'name'=>$name]);
    }

    public function profile()
    {
        $categories=Categorie::all();
        $user=Auth::user();
        return view('profile',['categories'=>$categories,'user'=>$user]);
    }
    public function uploadcontent()
    {
        $categories=Categorie::all();
        
        return view('uploadcontent',['categories'=>$categories]);
    }

    public function storevideo(Request $request)
    {
        
        $name = $request->file('video')->getClientOriginalName();
 
       

        $videoname = time().'.'.$request->video->extension(); 
        $request->video->move(public_path('.'), $videoname);
 
 
        $save = new Video();
 
        $save->user_id=Auth::user()->id;
        $save->name = $request->name;
        $save->path = $videoname;
        $save->description = $request->desc;
        $save->type = "mp4";
 
        $save->save();
 
        return redirect('uploadcontent')->with('status', 'Video Has been uploaded');
 
    }
    
    
    public function storeimages(Request $request)
    {
        
        $name = $request->file('image')->getClientOriginalName();
 
       

        $imagename = time().'.'.$request->image->extension(); 
        $request->image->move(public_path('.'), $imagename);
 
 
        $save = new Image();
 
        $save->user_id=Auth::user()->id;
        $save->name = $request->name;
        $save->path = $imagename;
        $save->description = $request->desc;
        $save->type = "img";
 
        $save->save();
 
        return redirect('uploadcontent')->with('statusimage', 'Image Has been uploaded');
 
    }
    
    public function storemedia(Request $request)
    {
        
        $name = $request->file('media')->getClientOriginalName();
 
       

        $imagename = time().'.'.$request->media->extension(); 
        $request->media->move(public_path('.'), $imagename);
 
 
        $save = new Media();
 
        $save->user_id=Auth::user()->id;
        $save->name = $request->name;
        $save->path = $imagename;
        $save->type="pdf";
        $save->description = $request->desc;
        $save->categorie_id = $request->cat;
 
        $save->save();
 
        return redirect('uploadcontent')->with('statusmedia', 'Media Has been uploaded');
 
    }

    public function admin()
    {
        $categories=Categorie::all();
        return view('admin',['categories'=>$categories]);
    }

    public function addcategory(Request $request)
    {
        $cat=new Categorie();
        $cat->name=$request->name;
        $cat->desc=$request->name;
        $cat->save();
        return redirect()->back();
    }
}

