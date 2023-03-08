<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\traits\ImageTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>"required|max:190",
            'email' => 'required|unique:users,email',
            'password' => 'required|same:confirm-password',
            'phone'=>"required|min:10",
            'age'=>"required",
            'specialty'=>"required",
            'lang'=>"required",
            'img' => 'required|mimes:jpeg,png,jpg',
            'medicalID' => 'required|mimes:jpeg,png,jpg',
            'bio'=>"required",
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->update([
            'type'=>'doctor',
        ]);


        $doctors = Doctor::create([
            'user_id'=>$user->id,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'age'=>$request->age,
            'specialty'=>$request->specialty,
            'lang'=>$request->lang,
            'bio'=>$request->bio,
            'facebook'=>$request->facebook,
            'linkedin'=>$request->linkedin,
            'twitter'=>$request->twitter,
        ]);
        if($request->file('img')){
        $dataimage = $this->insertImage($doctors->id,$request->img,'assets/img/doctor/');
        $doctors->update([
            'img'=> $dataimage,
        ]);
        }
        if($request->file('medicalID')){

            $dataimage = $this->insertImage($doctors->id,$request->medicalID,'assets/img/medicalID/');
            $doctors->update([
                'medicalID'=> $dataimage,
            ]);
        }

     return redirect()->route('doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    dd('test');
    }
}
