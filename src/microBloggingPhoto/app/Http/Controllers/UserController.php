<?php

namespace App\Http\Controllers;

// use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
// à ajouter pour le routage
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request\Input;
use Illuminate\http\Concerns\InteractsWithInput;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $this->name['name'] = $user;
        return view('user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //-- here -----
        return view('user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $data)
    {
        //-- here -----
        $user = user::find($id);
        $user->name = $data::get('name');
        $user->save();

        // redirect
        Session::flash('message', 'Successfully updated user!');
        //return RedirectController::to('user/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
