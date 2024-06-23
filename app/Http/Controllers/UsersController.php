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
    public function index(Request $request)
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Determinar si la solicitud espera una respuesta JSON
        if ($request->is('api/*') || $request->wantsJson()) {
            // Retornar los usuarios como una respuesta JSON
            return response()->json(['users' => $users]);
        }

        // Si la solicitud no espera JSON, devolver la vista
        return view('admin.adminRegister');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devolver la vista para crear un nuevo usuario
        return view('admin.adminRegister');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'name.required' => 'Name field is required.',
            'username.required' => 'Username field is required.',
            'password.required' => 'Password field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email must be a valid email address.'
        ]);

        // Manejar errores de validación
        if ($validator->fails()) {
            if ($request->is('api/*') || $request->wantsJson()) {
                return response()->json(['errors' => $validator->errors()], 400);
            } else {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        // Obtener datos validados
        $validated = $validator->validated();
        $password = Hash::make($validated['password']);
        $rand_code = random_int(100000, 999999);

        // Crear usuario en la base de datos
        $user = User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => $password,
            'user_type' => 0,
            'courses_id' => json_encode([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        ]);

        // Enviar correo electrónico
        Mail::to($validated['email'])->send(new UserMail($validated['name'], $user->id, $rand_code));

        // Retornar respuesta JSON si es una solicitud API
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json(['message' => 'User created successfully.', 'user' => $user], 201);
        }

        // Redirigir a la vista de administración
        return redirect()->route('admin.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Request $request)
    {
        // Buscar usuario por ID
        $user = User::find($id);

        if (!$user) {
            if ($request->is('api/*') || $request->wantsJson()) {
                return response()->json(['message' => 'User not found.'], 404);
            }
            return redirect()->route('admin.index')->with('error', 'User not found.');
        }

        // Retornar respuesta JSON si es una solicitud API
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json(['user' => $user]);
        }

        // Devolver la vista de detalles de usuario
        return view('admin.adminRegister', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Buscar usuario por ID y devolver la vista de edición
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'username' => ['required', 'string', 'max:255', 'unique:users,username,' . $id],
            'password' => ['nullable', 'string', 'min:8']
        ], [
            'name.required' => 'Name field is required.',
            'username.required' => 'Username field is required.',
            'password.required' => 'Password field is required.',
            'email.required' => 'Email field is required.',
            'email.email' => 'Email must be a valid email address.'
        ]);

        // Manejar errores de validación
        if ($validator->fails()) {
            if ($request->is('api/*') || $request->wantsJson()) {
                return response()->json(['errors' => $validator->errors()], 400);
            } else {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        // Obtener datos validados
        $validated = $validator->validated();

        // Actualizar usuario en la base de datos
        $user = User::find($id);
        $user->name = $validated['name'];
        $user->username = $validated['username'];
        $user->email = $validated['email'];
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }
        $user->save();

        // Retornar respuesta JSON si es una solicitud API
        if ($request->is('api/*') || $request->wantsJson()) {
            return response()->json(['message' => 'User updated successfully.', 'user' => $user]);
        }

        // Redirigir a la vista de administración
        return redirect()->route('admin.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar usuario de la base de datos
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }
        $user->delete();

        // Retornar respuesta JSON si es una solicitud API
        return response()->json(['message' => 'User deleted successfully.']);
    }
}
