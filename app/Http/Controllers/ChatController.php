<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $chatrooms = Chat::selectRaw('user_id, admin_id, messages, created_at, COUNT(CASE WHEN isViewed = false AND dari = "web" THEN 1 ELSE NULL END) as unread_count')
            ->groupBy('user_id')
            ->get();
        
        return view('chat.index', compact('chatrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        try 
        {
            // $chatroom = Chat::selectRaw('user_id, admin_id, messages, created_at')->groupBy('user_id')->get();

            $chat = Chat::where('user_id', $user->id);

            if($chat){
                $chats = $chat->get();
            } else {
                $chats = null;
            }

            $response = []; 
            $response['status'] = 'success';
            $response['data'] = $chats;
            $response['user_id'] = $user->id;
            $response['user_name'] = $user->name;

            return response()->json($response, 200);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'data' => [],
                'message' => 'failed',
            ], 500);
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = Chat::create([
                'user_id' => 1,
                'admin_id' => Auth::id(),
                'messages' => $request->chat,
                'dari' => Auth::getDefaultDriver()
            ]);

            return response()->json([
                'status' => 'success',
                'data' => $data
            ], 200);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'message' => 'failed',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
