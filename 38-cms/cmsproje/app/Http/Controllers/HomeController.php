<?php

namespace App\Http\Controllers;
// namespace App\Models;

use App\Models\Status;
use App\Models\User;
use App\Models\Friend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use NunoMaduro\Collision\Adapters\Phpunit\State;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function shoutHome()
    {
        // return view('shouthome');

        $userId = Auth::id();
        $status = Status::where('user_id', $userId)->orderBy('id', 'desc')->get();
        // Auth::user()->avatar = ''; |=> check if profile images empty
        $avatar = empty(Auth::user()->avatar) ? asset('images/avatar.png') : Auth::user()->avatar;
        return view("shouthome", ['status' => $status, 'avatar' => $avatar ]);
    }

    public function publicTimeline($nickname) {
        // return view('shouthome');

        $user = User::where('nickname', $nickname)->first();
        if($user){
            $status = Status::where('user_id', $user->id)->orderBy('id', 'desc')->get();
            // Auth::user()->avatar = ''; |=> check if profile images empty
            $avatar = empty($user->avatar) ? asset('images/avatar.png') : $user->avatar;
            $name = $user->name;

            $displayActions = false;
            if(Auth::check()){
                if(Auth::user()->id != $user->id){
                    $displayActions = true;
                }
            }
            return view("shoutpublic", [
                'status' => $status,
                'avatar' => $avatar,
                'name' => $name,
                'displayActions' => $displayActions,
                'friendId' => $user->id,
            ]);



        }else{
            return redirect('/');
        }

/*

        */
    }

    public function saveStatus(Request $request){
        if(Auth::check()){
            $status = $request->post('status');
            $userId = Auth::id();

            $statusModel = new Status();
            $statusModel->status = $status;
            $statusModel->user_id = $userId;
            $statusModel->save();
            return redirect()->route('shout');

        }
    }
    /**
     * Show Profile data save
     */
    function saveProfile(Request $request){
        if(Auth::check()){
            $user = Auth::user();
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $user->nickname = $request->nickname;

            $profileFile = 'user'.$user->id.'.'.$request->image->extension();
            $request->image->move(public_path('images'), $profileFile);

            // $user->avatar = public_path('images')."/".$profileFile;
            $user->avatar = asset("images/{$profileFile}");

            $user->save();
            return redirect()->route('shout.profile');
        }
    }

    /**
     * Show Profile page
     */
    public function profile()
    {
        return view('profile');
    }

    /*
    Make Friend
    */
    public function makeFriend( $friendId ) {
        $userId = Auth::user()->id;
        if ( Friend::where( 'user_id', $userId )->where( 'friend_id', $friendId )->count() == 0 ) {
            $friendship = new Friend();
            $friendship->user_id = $userId;
            $friendship->friend_id = $friendId;
            $friendship->save();
        }

        if ( Friend::where( 'friend_id', $userId )->where( 'user_id', $friendId )->count() == 0 ) {
            $friendship = new Friend();
            $friendship->friend_id = $userId;
            $friendship->user_id = $friendId;
            $friendship->save();
        }

        return redirect()->route( 'shout' );
    }

    public function unFriend( $friendId ) {
        $userId = Auth::user()->id;
        Friend::where( 'user_id', $userId )->where( 'friend_id', $friendId )->delete();
        Friend::where( 'friend_id', $userId )->where( 'user_id', $friendId )->delete();

        return redirect()->route( 'shout' );
    }


}
