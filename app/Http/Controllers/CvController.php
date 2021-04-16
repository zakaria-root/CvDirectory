<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use Auth;

class CvController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $listcv = Cv::where('user_id', Auth::user()->id)->get();
        return view('cv.index', ['cvs' => $listcv]);

    }
    public function create(){

        return view('cv.create');

    }
    public function store(Request $request){
        
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;
        $cv->save();
        session()->flash('success', 'la creation de le cv est terminé avec succes !!');

        return redirect('cvs');
    }
    public function edite($id){
        $cv = Cv::find($id);
        return view('cv.edite', ['cv' => $cv ]);
    }
    public function updat(Request $request, $id){

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
