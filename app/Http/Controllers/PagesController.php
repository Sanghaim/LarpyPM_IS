<?php
/**
 * Created by PhpStorm.
 * User: Alorain
 * Date: 23.03.2018
 * Time: 20:23
 */

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex () {
        $posts = Post::orderBy('id', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout () {
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

    public  function getContact () {

        return view('pages.contact');
    }

}