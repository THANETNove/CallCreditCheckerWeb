<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;


class newUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function searchUser(Request $request)
    {

        $search = $request['search'];
        $data = DB::table('users')
        ->where('status',0)
        ->where('status_login',NULL)
        ->where('username', 'like', "$search%")
        ->orderBy('id','DESC')
        ->paginate(50);
        
        $data2 = DB::table('users')
        ->where('status',0)
        ->where('status_login',1)
        ->where('username', 'like', "$search%")
        ->orderBy('id','DESC')
        ->paginate(50);
        
        return view('home',['data' => $data,'data2'=> $data2]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,string $id)
    {
        $currentDateTime = now();
        $formattedDateTime = Carbon::parse($currentDateTime)->format('d-m-Y H:i:s');

        if ($id == 1) {
            $numberDays = "1 เดือน";
            $newDateTime = Carbon::parse($currentDateTime)->addMonth();
        }elseif ($id == 3) {
            $numberDays = "3 เดือน";
            $newDateTime = Carbon::parse($currentDateTime)->addMonths(3);
        }elseif ($id == 6) {
            $numberDays = "6 เดือน";
            $newDateTime = Carbon::parse($currentDateTime)->addMonths(6);
        }else{
            $numberDays = "1 ปี";
            $newDateTime = Carbon::parse($currentDateTime)->addYear();
        }
      
        
        $userText =  "u".Str::random(5);
        $passwordText =  "p".Str::random(7);
        $emailText =  $userText."@CallCredit.com";

        DB::table('users')->insert([
            'username' => $userText,
            'email' => $emailText,
            'status' => "0",
            'status_login' => NULL,
            'number_days' => $numberDays,
            'expiration_date' => $newDateTime,
            'password' => $passwordText,
        ]);


        return redirect('home')->with('message', "บันทึกสำเร็จ" );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        $flight = User::find($id);

        $flight->delete();
        return redirect('home')->with('message', "ลบสำเร็จ" );
    }
}