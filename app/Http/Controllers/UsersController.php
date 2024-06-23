<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.adminRegister');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.adminRegister');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "username" => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'name.required' => 'Name field is required.',
            'username.required' => 'Username field is required.',
            'password.required' => 'Password field is required.',
            'email.required' => 'Email field is required - min 3 chars.',
            'email.email' => 'Email field must be email address.'
        ]);


        if($validator->fails())
        {
            return response()->json($validator->errors());
            //return $validator->errors();
        }
        
        // If validation passes, get the validated data
        $validated = $validator->validated();
        
        $password = Hash::make($validated['password']);
        $rand_code = random_int(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $password,
            'user_type' => 0,
            'courses_id' => json_encode([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
          
        ]);

        //send email
        Mail::to($validated['email'])->send(new UserMail($validated['name'], $user->id, $rand_code));
        //
        return 'User created successfully.';
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('admin.adminRegister');
    }

    public function login()
    {
        //
        return view('admin.adminLogin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function check(Request $request)
    {
        //
        //return $request;
        if(!Auth::attempt($request->only('email', 'password')))
        {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        
        $token = $user->createToken('auth_token')->plainTextToken;

        $uid =  $user->id;
        session_start();
   


        return redirect()->route('admin.index');
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        Auth::logout();
        //destroy session and variables
        session_start();
        session_destroy();
        //return response()->json(['message' => 'Logged out successfully']);
        return redirect()->route('admin.adminLogin');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}