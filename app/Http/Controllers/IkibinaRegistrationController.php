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

class IkibinaRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coins = User::all();


        return response()->json($coins);
        return view('loginPage');
    }
    public function create()
    {
        return view('registrationForm');
    }
    public function createttwo()
    {
        return view('registrationFormTwo');
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
            $validateikibinaregistration = Validator::make(
                $request->all(),
                [
                    'ikibinaname' => 'required',
                    'telefone' => 'required',
                    'intara' => 'required',
                    'akarere' => 'required',
                    'umurenge' => 'required',
                    'akagari' => 'required',
                    'umudugudu' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validateikibinaregistration->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateikibinaregistration->errors()
                ], 401);
            }

            $ikibinaregistration = User::create([
                'ikibinaname' => $request->ikibinaname,
                'telefone' => $request->telefone,
                'intara' => $request->intara,
                'akarere' => $request->akarere,
                'umurenge' => $request->umurenge,
                'akagari' => $request->akagari,
                'umudugudu' => $request->umudugudu,
                'password' => Hash::make($request->password),
                'role' => 'IkibinaAdmin'
            ]);
            $ikibinaregistration->assignRole('IkibinaAdmin');


            return redirect('/')->with('status', "ikibina registered succesful");
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function storetwo(Request $request)
    {
        try {
            $validateikibinaregistration = Validator::make(
                $request->all(),
                [
                    'ikibinaname' => 'required',
                    'telefone' => 'required',
                    'intara' => 'required',
                    'akarere' => 'required',
                    'umurenge' => 'required',
                    'akagari' => 'required',
                    'umudugudu' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validateikibinaregistration->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateikibinaregistration->errors()
                ], 401);
            }

            $ikibinaregistration = User::create([
                'ikibinaname' => $request->ikibinaname,
                'telefone' => $request->telefone,
                'intara' => $request->intara,
                'akarere' => $request->akarere,
                'umurenge' => $request->umurenge,
                'akagari' => $request->akagari,
                'umudugudu' => $request->umudugudu,
                'password' => Hash::make($request->password)
            ]);

            return redirect('/regtableview')->with('status', "ikibina registered succesful");
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
        return User::find($id);
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
        $ikibinaregistration = User::find($id);
        $ikibinaregistration->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function IkibinaregistrationView()
    {
        return view('table');
    }

    public function hello()
    {
        echo 'hellooo';
    }

    public function displayIbibina()
    {
        $data = User::all();
        return view('table', ['data' => $data]);
    }
    public function fechibinadata()
    {
        $data = User::all();
        return view('loginPage', ['data' => $data]);
    }

    public function lg(Request $request)
    {
        try {
            $validateikibinaregistration = Validator::make(
                $request->all(),
                [
                    'telefone' => 'required',
                    'password' => 'required'
                ]
            );

            if ($validateikibinaregistration->fails()) {
                return redirect('/')->with('status', "validation error");
            }

            if (!Auth::attempt($request->only(['telefone', 'password']))) {
                return redirect('/AdminDashboard')->with('status', "Telephone & Password does not match with our record.");
            }


            $Userpassword = User::where('password', Hash::make($request->password))->first();
            return redirect('/')->with('status', "ikibinaregistration Logged In Successfully");
        } catch (\Throwable $th) {
            return redirect('/')->with('status', $th->getMessage());
        }
    }

    public function loginikibinaregistration(Request $request)
    {
        $credentials = $request->validate([
            'telefone' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/Home')->with('status', "123");
        } else {
            return back()->withErrors([
                'telefone' => 'The provided credentials do not match our records.',
            ])->onlyInput('telefone')->with('status', "Imyirondoro ushyizemo siyo");
        }
    }
}
