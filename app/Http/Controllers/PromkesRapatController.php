<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageManagerStatic;
use Illuminate\Support\Str;

class PromkesRapatController extends Controller
{
    public function index(){
        


        
        // $images = DB::table('images')->where('type', 'lokmun')->get();
        $images = Image::where('type', 'dokumentasi_rapat_promkes')->orderBy('created_at', 'desc')->paginate(9);

        // limit title in images
        foreach ($images as $image) {
            $image->title = Str::limit($image->title, 22);
        }

      
        return view('promkes_rapat.dokumentasi',[
            "title" => "promkes",
            "path" => "dokumentasi_rapat_promkes",
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
            'type' => $request->type
        ]);

        return back();



        } else {
            return redirect()->back()->with('error', 'No File Uploaded');
        }
    }

    public function getImageDokumentasi($name)
    {
        // Retrieve the specific image by name and type

        // Retrieve all 'lokmun_notulen' images
        $images = Image::where('type', 'dokumentasi_rapat_promkes')->get();

        return view('lokmun.notulen', [
            'images' => $images,
            'path' => "dokumentasi_rapat_promkes" // Pass the title of the specific image
        ]);
    }

    public function deleteImageDokumentasiPromkes(Request $request)
        {
            // Get the image name from the request
            $imageName = $request->input('name');

            // Find the image by name and delete it
            $image = Image::where('name', $imageName)->first();
                
            if ($image) {
                // Delete the image from the database and storage
                $image->delete();
                // You may want to delete the actual file from storage here as well

            }
    
            return back();
        }

    public function uploadImageNotulenRapat(Request $request){
            $request->validate([
                'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    
            if ($request->hasFile('image')){
    
                $extension = $request->file('image')->getClientOriginalExtension();
    
                $resizedImage = ImageManagerStatic::make($image)
                ->resize(800, 600)
                ->save(public_path('storage/uploads/notulen/'. $imageName));
    
            Image::create([
                'name' => $imageName,
                'title' => $request->title,
                'type' => 'notulen_rapat_promkes'
            ]);
    
            return back();
    
    
    
            } else {
                return redirect()->back()->with('error', 'No File Uploaded');
            }
        }
    
    public function IndexNotulen(){

            // $images = DB::table('images')->where('type', 'lokmun')->get();
            $images = Image::where('type', 'notulen_rapat_promkes')->orderBy('created_at', 'desc')->paginate(9);
    
            // limit title in images
            foreach ($images as $image) {
                $image->title = Str::limit($image->title, 22);
            }
    
          
            return view('promkes_rapat.notulen',[
                "title" => "promkes",
                "path" => "notulen_rapat_promkes",
                "images" => $images
            ]);
        }

        public function deleteImageNotulenPromkes(Request $request)
        {
            // Get the image name from the request
            $imageName = $request->input('name');

            // Find the image by name and delete it
            $image = Image::where('name', $imageName)->first();
                
            if ($image) {
                // Delete the image from the database and storage
                $image->delete();
                // You may want to delete the actual file from storage here as well

            }
    
            return back();
        }

        public function IndexUndangan(){

            // $images = DB::table('images')->where('type', 'lokmun')->get();
            $images = Image::where('type', 'undangan_rapat_promkes')->orderBy('created_at', 'desc')->paginate(9);
    
            // limit title in images
            foreach ($images as $image) {
                $image->title = Str::limit($image->title, 22);
            }
    
          
            return view('promkes_rapat.undangan',[
                "title" => "promkes",
                "path" => "undangan_rapat_promkes",
                "images" => $images
            ]);
        }

        public function uploadImagUndanganRapat(Request $request){
            $request->validate([
                'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
    
    
            if ($request->hasFile('image')){
    
                $extension = $request->file('image')->getClientOriginalExtension();
    
                $resizedImage = ImageManagerStatic::make($image)
                ->resize(800, 600)
                ->save(public_path('storage/uploads/undangan/'. $imageName));
    
            Image::create([
                'name' => $imageName,
                'title' => $request->title,
                'type' => 'undangan_rapat_promkes'
            ]);
    
            return back();
    
    
    
            } else {
                return redirect()->back()->with('error', 'No File Uploaded');
            }
        }

        public function deleteImageUndanganPromkes(Request $request)
        {
            // Get the image name from the request
            $imageName = $request->input('name');

            // Find the image by name and delete it
            $image = Image::where('name', $imageName)->first();
                
            if ($image) {
                // Delete the image from the database and storage
                $image->delete();
                // You may want to delete the actual file from storage here as well
            }
    
            return back();
        }
        


}
