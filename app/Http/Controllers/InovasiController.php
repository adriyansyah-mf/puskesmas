<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageManagerStatic;
use Illuminate\Support\Str;
use Spatie\PdfToImage\Pdf;
use PhpOffice\PhpWord\IOFactory;


class InovasiController extends Controller
{
    public function index($prog, $view_name, $title){

        // $images = DB::table('images')->where('type', 'lokmun')->get();
        $images = Image::where('type', $prog)->orderBy('created_at', 'desc')->paginate(9);

        // limit title in images
        foreach ($images as $image) {
            $image->title = Str::limit($image->title, 22);
        }

        $viewName = 'inovasi.'.$view_name;

        return view($viewName,[
            "title" => "$title",
            "path" => "inovasi",
            "images" => $images
        ]);
    }



    public function getImage($name)
    {
        // Retrieve the specific image by name and type

        // Retrieve all 'lokmun_notulen' images
        $images = Image::where('type', 'inovasi')->get();

        return view('inovasi.index', [
            'images' => $images,
            'path' => "inovasi" // Pass the title of the specific image
        ]);
    }

    public function uploadImage(Request $request)
        {

            $request->validate([
                'image' => 'required|file|mimes:jpeg,png,jpg,gif,pdf,docx|max:2048',
            ]);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            if ($request->hasFile('image')) {
                

                $extension = $request->file('image')->getClientOriginalExtension();

                if(in_array($extension, ['jpeg', 'png', 'jpg', 'gif'])){
                    $resizedImage = ImageManagerStatic::make($image)
                    ->resize(800, 600)
                    ->save(public_path('storage/uploads/inovasi/' . $imageName));

                } elseif ($extension == 'pdf'){
                    $image->move(public_path('storage/uploads/inovasi/'), $imageName);
                    
                } elseif ($extension == 'docx'){
                    $doc = IOFactory::load($file);
                    $imagePath = public_path('storage/uploads/inovasi/' . $imageName);
                    $image = $doc->save($imagePath, 'jpeg');
                }

                Image::create([
                    'name' => $imageName,
                    'title' => $request->title,
                    'type' => $request->type
                ]);

                return back();




                
                
            } else {
                // Handle the case when no file was uploaded
                return redirect()->back()->with('error', 'No file was uploaded.');
            }
        }
    

        public function deleteImage(Request $request)
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
