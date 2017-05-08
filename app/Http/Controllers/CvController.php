<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
//use Illuminate\Support\Facades\DB;
use DB;
use App\Http\Requests\cvRequest;

class CvController extends Controller
{
   public function index(){
      // $listcv= new Cv();
       $listcv = Cv::all();
       return view('cv.index',['cvs'=> $listcv]);
   }

    public function create(){
       return view('cv.create');
   }

//    public function store(Request $request)
    public function store(cvRequest $request){
        //return $request->all();
        //instantieren nieuw Cv Model
        $cv=new Cv();
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
        $cv->save();
      //  Session::flash('message', 'Successfully deleted the nerd!');
        return redirect('msgreturn');
       // return redirect('cvs');
        }

    public function edit($id){
        $cv=Cv::find($id);

return view('cv.edit',['cv'=>$cv]);



    }
   // public function update(Request $request,$id)
    public function update(cvRequest $request,$id){

        $cv=Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
        $cv->save();
        return redirect('cvs');
    }

    public function destroy($id){
        $cv=Cv::find($id);
        $cv->delete();

        return redirect ('cvs');

    }

    public function make(){
        return view('cv.make');
    }
}
//eind
