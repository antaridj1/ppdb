<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Chat;
use App\Models\siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $chatrooms = Chat::selectRaw('siswa_id, admin_id, messages, created_at, COUNT(CASE WHEN isViewed = false AND dari = "siswa" THEN 1 ELSE NULL END) as unread_count')
            ->groupBy('siswa_id')
            ->get();
        
        return view('chat.index', compact('chatrooms'));
    }

    public function create(Siswa $siswa)
    {
        try 
        {
            // $chatroom = Chat::selectRaw('siswa_id, admin_id, messages, created_at')->groupBy('siswa_id')->get();

            $chat = Chat::where('siswa_id', $siswa->id);

            if($chat){
                $chats = $chat->get();
            } else {
                $chats = null;
            }

            $chat->update([
                'isViewed' => true
            ]);

            $unread = $chat->where('isViewed', false)->count();

            $response = []; 
            $response['status'] = 'success';
            $response['data'] = $chats;
            $response['siswa_id'] = $siswa->id;
            $response['siswa_name'] = $siswa->name;
            $response['unread'] = $unread;

            return response()->json($response, 200);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'data' => [],
                'message' => 'failed',
            ], 500);
        }
       
    }

    public function store(Request $request, $siswa)
    {
        try {
            $data = Chat::create([
                'siswa_id' => $siswa,
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

    public function indexsiswa(){
        return view('student.pages.chat');
    }

    public function createsiswa(){
        try {
            $chats = Chat::where('siswa_id', Auth::id())->get();
            return response()->json($chats, 200);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                'message' => 'failed',
            ], 500);
        }
    }

    public function storesiswa(Request $request)
    {
        $admin_id = Admin::where('isAdmin',true)->value('id');

        try {
            $data = Chat::create([
                'siswa_id' => Auth::id(),
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
