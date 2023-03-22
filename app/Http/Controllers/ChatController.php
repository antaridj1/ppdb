<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Chat;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $chatrooms = Chat::selectRaw('user_id, admin_id, messages, created_at, COUNT(CASE WHEN isViewed = false AND dari = "web" THEN 1 ELSE NULL END) as unread_count')
            ->groupBy('user_id')
            ->get();
        
        return view('chat.index', compact('chatrooms'));
    }

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

    public function store(Request $request, $user)
    {
        try {
            $data = Chat::create([
                'user_id' => $user,
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

    public function indexUser(){
        return view('student.pages.chat');
    }

    public function createUser(){
        try {
            $chats = Chat::where('user_id', Auth::id())->get();
            return response()->json($chats, 200);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'message' => 'failed',
            ], 500);
        }
    }

    public function storeUser(Request $request)
    {
        $admin_id = Admin::where('isAdmin',true)->value('id');

        try {
            $data = Chat::create([
                'user_id' => Auth::id(),
                'admin_id' => $admin_id,
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
    
}
