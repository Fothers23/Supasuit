<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
    
    

    public function logout()
    {
        auth()->logout();

        $this->setSuccessMessage('User has been logged out.');

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'fb_link' => 'URL|string|max:255',
            'twit_link' => 'starts_with:@|string|max:255',
            'insta_link' => 'starts_with:@|string|max:255',
            'snap_link' => 'string|max:255',
            'tube_link' => 'URL|string|max:255',
            'web_link' => 'URL|string|max:255'
        ]);

        $user->name = $request->name;
        $user->fb_link = $request->fb_link;
        $user->twit_link = $request->twit_link;
        $user->insta_link = $request->insta_link;
        $user->snap_link = $request->snap_link;
        $user->tube_link = $request->tube_link;
        $user->web_link = $request->web_link;

        $user->update();

        return redirect()->route('profile', $user->id)
                        ->with('success','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('logout')
                        ->with('success','Account deleted');
        
    }
}
