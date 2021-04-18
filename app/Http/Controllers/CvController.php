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
        if (Auth::user()->is_admin) {
            
            $listcv = Cv::all();
        }else {
            
            $listcv = Auth::user()->cvs;
        }

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

            $cv->image = $request->image->store('images');        
        }
        $cv->save();

        session()->flash('success', 'la creation de le cv est terminé avec succes !!');

        return redirect()->route('cv.index');
    }

    public function edite($id){
        $cv = Cv::findOrFail($id);

        $this->authorize('update', $cv);

        return view('cv.edite', ['cv' => $cv ]);
        
    }

    public function updat(cvRequest $request, $id){

        $cv = Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        
        if ($request->hasFile('image')) {
            
            $cv->image = $request->image->store('images');        
        }
        $cv->save();
        session()->flash('warning', 'la modification de le cv est terminé avec succes !!');
        return redirect()->route('cv.index');
    }

    public function show($id){
        $cv = Cv::find($id);
        
        return view('cv.show', ['cvs' => $cv]);
    }

    public function destroy($id){
        $cv = Cv::findOrFail($id);
        $this->authorize('delete', $cv);
        Cv::destroy($id);
        session()->flash('danger', 'la suppresion de le cv est terminé avec succes !!');
        return redirect()->route('cv.index');
    }

}
