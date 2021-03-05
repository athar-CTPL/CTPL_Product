<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

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
        // $users = User::all();
        // $users = DB::table('users')->paginate(10);
        // $unverify = $users->whereNull('email_verified_at');
        // $users = DB::table('users')
        // ->offset(10)
        // ->limit(3)
        // ->get();
        // $users = DB::table('users')->whereNull('email_verified_at')->get();
        // $user = DB::table('users')->skip(10)->take(10)->get();
        // $user = DB::table('users')->insertOrIgnore([
        //     ['id'=>1,'email'=>'helo6@mail.com'],
        // ]);


        // $user = DB::table('users')->insertGetId(
        //     ['email' => 'john2@example.com', 'name' => 'john','password'=>'12345678']
        // );
       
        // $users = DB::table('users')->updateOrInsert(['name'=>'johns','email'=>'johns2@gmail.com','password'=>'12345678']
                    
        //     );   

        // dd($users);
        
        return view('home');
    }
}
