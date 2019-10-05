<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{ 
    public function index(){
        
        $Pengumuman=Pengumuman::all(); 

        return view ('pengumuman.index',compact('Pengumuman'));
        //return view ('pengumuman.index'->with('data',$Pengumuman);
    }

    public function show($id) {

        //$Pengumuman=Pengumuman::where('id',$id)->first();
        $Pengumuman=Pengumuman::find($id);

        return view ('pengumuman.show', compact('Pengumuman'));
        
    }

    public function create(){
        return view('pengumuman.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}