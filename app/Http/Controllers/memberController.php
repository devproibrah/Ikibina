<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = User::with('payment')->get();
        return $member;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function createttwo()
    {
        return view('registrationFormTwo');
    }

    public function storetwo(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'member_fname' => 'required',
                    'member_lname' => 'required',
                    'telefone' => 'required',
                    'member_national_id' => 'required',
                    'ikibina_id' => 'required',
                    'ikibinaname' => 'required',
                    'password' => 'required',
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $User = User::create([
                'member_fname' => $request->member_fname,
                'member_lname' => $request->member_lname,
                'telefone' => $request->telefone,
                'member_national_id' => $request->member_national_id,
                'ikibina_id' => $request->ikibina_id,
                'ikibinaname' => $request->ikibinaname,
                'password' => Hash::make($request->password),
                'role' => 'Member'
            ]);
            $User->assignRole('Member');
            //regtableviewTwo
            return redirect('/AdminDashboard')->with('status', "ikibina registered succesful");
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function displayIbibinaTwo(Request $ikibina_id)
    {
        $data = User::all()->where('ikibina_id', $ikibina_id->ikibina_id);
        return view('tableTwo', ['data' => $data]);
    }
    public function displayIbibinaThree(Request $ikibina_id)
    {
        $data = User::all();
        return view('ububiko', ['data' => $data]);
    }
}
