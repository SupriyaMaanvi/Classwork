<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class Home extends Controller
{
    //calling work
    public function homepage(){
        return view('home',["data"=> Record::all()]);
    }

    //delete work
    public function delete($id){
        Record::find($id)->delete();
        return redirect()->back();
    }

    //update work
    public function update($edit_id){
        $data['record'] = Record::find($edit_id);
        return view('edit',$data);
    }

    public function updateData(Request $req,$id){
        $req->validate([
            'name' => 'required',
            'contact' => 'required|min:10',
            'email' => 'required',
            'dob' => 'required',
            'about' => 'required',
        ]);
        
        Record::find($id)->update([
            'name' => $req->name,
            'contact' => $req->contact,
            'email' => $req->email,
            'dob' => $req->dob,
            'about' => $req->about,
        ]);
        return redirect()->back();    
    }

    //insert work
    public function insert(Request $req){
            $req->validate([
                'name' => 'required',
                'contact' => 'required|min:10',
                'email' => 'required',
                'dob' => 'required',
                'about' => 'required',
            ]);
            
            Record::create([
                'name' => $req->name,
                'contact' => $req->contact,
                'email' => $req->email,
                'dob' => $req->dob,
                'about' => $req->about,
            ]);
            return redirect()->back();
    }
}
