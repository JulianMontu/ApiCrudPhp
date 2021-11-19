<?php

namespace App\Http\Controllers;
use App\Http\Requests\GuardarDoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
//use App\Http\Request\GuardarDoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DoctorResource::collection(Doctor::all());
    }

    /**
     * Store a newly created resource in storage.
     *00
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*return response()->json([
            'res'=>true,
            'msg'=>'Doctor guardado correctamente'
        ]);*/
        //return new  DoctorResource(Doctor::create($request->all()));
        $datos= Doctor::create($request->all());
        return response()->json($datos);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //return response()->json(['res'=>true, 'doctor'=>$doctor]);
        return new DoctorResource($doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        dd($doctor->update($request->all()));
        return new DoctorResource($doctor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return new DoctorResource($doctor);
    }
}
