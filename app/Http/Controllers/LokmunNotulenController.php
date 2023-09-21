<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class LokmunNotulenController extends Controller
{
    public function index($prog){

        // $images = DB::table('images')->where('type', 'lokmun')->get();
        $images = Image::where('type', 'lokmun_notulen')->get();

        return view('lokmun.notulen',[
            "title" => "$prog",
            "path" => "lokmin_linprog_linsek",
            "images" => $images
        ]);
    }



    public function getImage($name)
    {
        // Retrieve the specific image by name and type
        $image = Image::where('type', 'lokmun_notulen')->where('name', $name)->first();

        if (!$image) {
            abort(404); // Handle the case when the image is not found
        }

        // Retrieve all 'lokmun_notulen' images
        $images = Image::where('type', 'lokmun_notulen')->get();

        return view('lokmun.notulen', [
            'images' => $images,
            'title' => $image->title,
            'path' => "lokmin_linprog_linsek" // Pass the title of the specific image
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        $imageName = time().'.'.$request->image->extension();

        $uploadedImage = $request->image->move(public_path('storage/uploads/lokmun'), $imageName);

        Image::create([
            'name' => $imageName,
            'title' => $request -> title,
            'type' => 'lokmun_notulen'
        ]);

        

        return back();
    }
    
}
