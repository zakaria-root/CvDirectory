<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
class CvController extends Controller
{
    public function index(){
        $listcv = Cv::all();
        return view('cv.index', ['cvs' => $listcv]);

    }
    public function create(){

        return view('cv.create');

    }
    public function store(Request $request){
        
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
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
