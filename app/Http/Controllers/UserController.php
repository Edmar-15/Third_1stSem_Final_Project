<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

use function Laravel\Prompts\table;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show() {
        return view('welcome');
    }

    public function listahan() {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }
    
    public function display($name) {
        $user = User::where('name', $name)->first();

        if(!$user) {
            abort(404, 'User not found');
        }
        return view('user.specific', ['user' => $user]);
    }

    public function create() {
        return view('user.create');
    }

    public function add(Request $request) {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('user.list')->with('success', 'User added successfully');
    }

    public function edit() {
        $users = User::all();
        return view('user.edit', ['users' => $users]);
    }

    public function update($id) {
        $user = User::where('id', $id)->first();

        if(!$user) {
            abort(404, 'User not found');
        }
        return view('user.update', ['user' => $user]);
    }

    public function update_user(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
        ]);

        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'updated_at' => now(),
        ]);

        $user = User::find($id);

        return redirect()->route('user.specific', $user->name)->with('success', 'User updated successfully');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('home')->with('success', 'User deleted successfully');
    }

    public function delete_prompt($id) {
        $user = User::where('id', $id)->first();

        if(!$user) {
            abort(404, 'User not found');
        }
        return view('user.delete_prompt', ['user' => $user]);
    }

    public function delete_user() {
        $users = User::all();
        return view('user.delete', ['users' => $users]);
    }
}