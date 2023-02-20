<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get all Users
     */
    function index()
    {
        $Users = User::all();

        return view("users.index")
            ->with("users", $Users);
    }

    function show(int $id)
    {
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        return view("users.show", [
            "user" => $user
        ]);
    }

    function edit(int $id)
    {
        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        return view("users.edit", [
            "user" => $user
        ]);
    }

    function create()
    {
        return view("users.create");
    }

    function store(Request $request)
    {
        // kompletní validační pravidla: https://laravel.com/docs/9.x/validation
        $request->validate([
            "name" => "required|string",
            "password" => "required",
        ]);

        User::create($request->except("_token"));

        return redirect(route("users.index"));
    }

    function save(Request $request, int $id)
    {
        /** @var User $user */
        $User = Item::find($id);

        if (!$User) {
            abort(404);
        }

        // klasicky PHP
        // $all = $request->all();
        // unset($all["_token"]);
        // $item->fill($all);

        // laravel
        $User->fill($request->except('_token'));

        // nebo takto
        // $item->name = $request->get("name");
        // $item->currency = $request->get("currency");
        // ...

        // update | save item
        $User->save();


        return redirect(route('users.show', $user->id));
    }

    function destroy(int $id)
    {

        /** @var User $user */
        $item = User::find($id);

        if (!$user) {
            abort(404);
        }

        $user->delete();

        return redirect(route("users.index"));
    }
}
