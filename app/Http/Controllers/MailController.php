<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class MailController extends Controller
{
    public function add()
    {
        $data = Student::orderBy('name', 'asc')->get();
        return view('superadmin.pages.mail.add', compact('data'));
    }

    public function post(Request $request)
    {
        $students = Student::whereIn('id', array_keys($request->select))->get();

        foreach ($students as $st) {
            $data = [
                "name" => $st->name,
                "email" => $st->email,
                "subject" => $request->konu,
                "content" => $request->mesaj
            ];

            $email = $st->email;

            $send_mail = mail::send('mail', $data, function ($message) use ($data) {
                $message->from('pluseducationportal@gmail.com', 'Plus Education');
                $message->to($data["email"]);
                $message->subject($data["subject"]);
            });

        }
        Alert::success('Mail Gönderildi');
        return redirect()->route('superadmin.index');
    }
}
