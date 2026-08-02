<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\TelegramService;
use Carbon\Carbon;


class ContactController extends Controller
{


public function store(
Request $request,
TelegramService $telegram
)
{


$request->validate([

'nama'=>'required',

'email'=>'required|email',

'pesan'=>'required'

]);



$message = "

<b>📩 Konsultasi Baru SEB</b>


👤 Nama:
{$request->nama}


📧 Email:
{$request->email}


📞 WhatsApp:
{$request->telepon}


💬 Pesan:
{$request->pesan}


⏰ Waktu:
".Carbon::now()->format('d-m-Y H:i')."


";


$telegram->sendMessage($message);



return back()->with(

'success',

'Pesan berhasil dikirim. Tim SEB akan segera menghubungi Anda.'

);



}


}