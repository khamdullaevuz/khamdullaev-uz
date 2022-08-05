<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $works = Works::orderByDesc('created_at')->get();

        return view('home', compact('works'));
    }

    public function contact(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $message = $request->input('message');
        
        if($name == "Henrylak"){
            echo "RIP";
            exit;
        }
        
        if(is_numeric(str_replace(" ", "", trim($phone,"+")))){
            $response = Http::post('https://api.telegram.org/bot' . env('TELEGRAM_BOT_TOKEN') . '/sendMessage', [
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => "Yangi murojaat:\n\n*Ismi:* " . $name . "\n*Telefon raqami*: " . $phone . "\n*Sarlavha:* " . $subject . "\n*Xabar matni:* " . $message,
                'parse_mode' => 'markdown'
            ]);
            if ($response['ok'] == true) {
                echo "OK";
            } else {
                echo "noma'lum xatolik";
            }
        }else{
            echo "telefon raqam xato kiritildi!";
        }   
    }

    public function works(){
        return response()->json(Works::all(), 200);
    }

    public function workShow($id){
        return response()->json(Works::findOrFail($id), 200);
    }
}
