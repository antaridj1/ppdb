<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\StyleInterior;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:web');
        if (Auth::user() === null){
            return redirect('login')
                ->with('auth', 'warning')
                ->with('message','Anda harus login terlebih dahulu');
        }

    }

    public function index()
    {
        $styles = StyleInterior::all();
        return view('order', compact('styles'));
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
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required|email',
            'type' => 'required',
            'isRenovation' => 'required',
            'needs' => 'required',
            'location' => 'required',
            'started_month' => 'required',
        ]);

        $month = Carbon::parse($request->started_month)->toDateString();

        // $users = User::where('email', $request->email);

        // if($users->count() > 0){
        //     $user_id = $users->value('id');
        // } else {
        //     $user = User::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'phone_number' => $request->phone_number,
        //         'password' => Str::random(8),
        //     ]);
        //     $user_id = $user->id;
        // }
        $styles = (array)$request->style_interior;
        Order::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'isRenovation' => $request->isRenovation,
            'needs' => $request->needs,
            'location' => $request->location,
            'room_size' => $request->room_size,
            'style_interior' => $styles,
            'budget' => $request->budget,
            'started_month' => $month,
            'detail' => $request->detail
        ]);

        return redirect('order-user')
        ->with('status','success')
        ->with('message','Formulir telah dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
