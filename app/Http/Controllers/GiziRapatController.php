<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageManagerStatic;
use Illuminate\Support\Str;

class GiziRapatController extends Controller
{
    public function index($prog){

        // $images = DB::table('images')->where('type', 'lokmun')->get();
        $images = Image::where('type', 'dokumentasi_rapat_gizi')->orderBy('created_at', 'desc')->paginate(9);

        // limit title in images
        foreach ($images as $image) {
            $image->title = Str::limit($image->title, 22);
        }

      
        return view('gizi_rapat.dokumentasi',[
            "title" => "$prog",
            "path" => "dokumentasi_rapat_gizi",
            "images" => $images
        ]);
    }

    public function uploadImage(Request $request){
        $request->validate([
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();


        if ($request->hasFile('image')){

            $extension = $request->file('image')->getClientOriginalExtension();

            $resizedImage = ImageManagerStatic::make($image)
            ->resize(800, 600)
            ->save(public_path('storage/uploads/dokumentasi/'. $imageName));

        Image::create([
            'name' => $imageName,
            'title' => $request->title,
            'type' => 'dokumentasi_rapat_gizi'
        ]);

        return back();



        } else {
            return redirect()->back()->with('error', 'No File Uploaded');
        }
    }


}
