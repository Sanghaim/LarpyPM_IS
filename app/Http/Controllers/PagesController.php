<?php
/**
 * Created by PhpStorm.
 * User: Alorain
 * Date: 23.03.2018
 * Time: 20:23
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    public function getIndex()
    {
        $posts = Post::orderBy('id', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $first = "Vladimír";
        $last = "Straka";
        $full = $first . " " . $last;
        $email = "vladimir.strak@gmail.com";
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $full;
        return view('pages.about')->withData($data);
        //return view('pages.about')->withFullname($full)->withEmail($email);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'body' => 'required|min:10'
        ]);

        $data = [
            'email' => $request['email'],
            'subject' => $request['subject'],
            'body' => $request['body']
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('registrace@larpypm.cz');
            $message->subject($data['subject']);
        });

        Session::flash('success','E-mail byl zaslán');
        return redirect()->route('contact');
    }

}