<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memberregistration;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class memberRegistratonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return memberregistration::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'member_fname' => 'required',
                    'member_lname' => 'required',
                    'member_telephone' => 'required',
                    'member_national_id' => 'required',
                    'ikibina_id' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $memberregistration = memberregistration::create([
                'member_fname' => $request->member_fname,
                'member_lname' => $request->member_lname,
                'member_telephone' => $request->member_telephone,
                'member_national_id' => $request->member_national_id,
                'ikibina_id' => $request->ikibina_id
            ]);

            return response()->json([
                'status' => true,
                'message' => 'member registered Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return memberregistration::find($id);
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

        $activity = memberregistration::find($id);
        $activity->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return memberregistration::destroy($id);
    }
}
