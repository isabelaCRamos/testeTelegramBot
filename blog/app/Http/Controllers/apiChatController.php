<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Filesystem\Factory;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Storage;
use App\instalador;


class apiChatController extends Controller
{
    
    public function chatTelegram(Request $request) { 
        
        if(isset($request["message"])){     
            $apiToken = "1150099256:AAGaf0zJXRZg_KqdYxUyGcNL5hH3juglT9M";
            $chatId=$chatId=$request["message"]["chat"]["id"];
            $mensagem = "mensagem enviada" ;
            
               $response = file_get_contents( "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chatId&text=$mensagem"); 
        }

     }

     public function enviarTexto(Request $request){

        $apiToken = "1150099256:AAGaf0zJXRZg_KqdYxUyGcNL5hH3juglT9M";
            $chatId=$chatId=$request["message"]["chat"]["id"];
            $mensagem = "mensagem enviada" ;
            
               $response = file_get_contents( "https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chatId&text=$mensagem"); 

     }

     public function apagarMensagem(Request $request){

        $apiToken = "1150099256:AAGaf0zJXRZg_KqdYxUyGcNL5hH3juglT9M";
        
            $chatId=$request["message"]["chat"]["id"];
            $chat_id=json_encode($chatId,JSON_UNESCAPED_UNICODE);
            $messageId=$request["message"]["message_id"];
            $message_id=json_encode($messageId,JSON_UNESCAPED_UNICODE);

                $response = file_get_contents("https://api.telegram.org/bot$apiToken/deleteMessage?chat_id=$chat_id&message_id=$message_id");  

     }
 }
