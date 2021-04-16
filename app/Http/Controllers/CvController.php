<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Cv;
use App\Http\Requests\cvRequest;

use Auth;

class CvController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $listcv = Auth::user()->cvs;
        return view('cv.index', ['cvs' => $listcv]);

    }
    public function create(){

        return view('cv.create');

    }
    public function store(cvRequest $request){
        
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id; 
        
        if ($request->hasFile('image')) {
            $cv->image = $request->image->sort('image');
        }
        $cv->save();

        session()->flash('success', 'la creation de le cv est terminé avec succes !!');

        return redirect('cvs');
    }
    public function edite($id){
        $cv = Cv::find($id);
        return view('cv.edite', ['cv' => $cv ]);
    }
    public function updat(cvRequest $request, $id){

        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        return redirect('cvs');

    }
    public function destroy(Request $request,$id){
        $cv = Cv::find($id);
        $cv->delete();
        return redirect('cvs');
    }

}
