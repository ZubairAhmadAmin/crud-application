<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Comment;

class TemplateController extends Controller
{
    // public function getAllPost() {
    //     $title = "Ahmad Zubair Amin";
    //     $number = 1;
    //     $gender = '';
    //     $users = [
    //         "{'id'=> 1, 'name'=> 'ali', 'age'=> 22}",
    //         // 'id'=> 2, 'name'=> 'karim', 'age'=> 24,
    //         // 'id'=> 3, 'name'=> 'sharif', 'age'=> 26,
    //         // 'id'=> 4, 'name'=> 'noman', 'age'=> 27
    //     ];
    //     $names = ['ahmad', 'ali', 'karim', 'noman'];
    //     return view('home', [
    //         'title' => $title,
    //         'number' => $number,
    //         'gender' => $gender,
    //         'names' => $names
    //     ]);
        // ->with([
        //     'title' => $title
        // ]);
        // return view('home', compact('title'));
        // return view('home', [
        //     'title' => $title
        // ]);
        // return View::make('home');
    // }

    public function SinglePost() {
        $names = ['ahmad', 'ali', 'karim', 'noman'];
        return view('post.single', [
            'names' => $names
        ]);
    }

    public function home() {
        // $user = new User();
        // $user->name = 'Sharif';
        // $user->email = 'sharif@gmail.com';
        // $user->password = bcrypt('new_pass_12345');
        // $user->avatar = 'no image';
        // $user->phone = '0786554278';
        // dump($user->save());

        // $user = User::create([
        //     'name' => 'Omar',
        //     'email' => 'omar@gmail.com',
        //     'password' => bcrypt('new_omar_123'),
        //     'avatar' => 'no avatar',
        //     'phone' => '0774837590'
        // ]);
        // dd($user);

        // $user = User::firstOrCreate(
        //     ['email' => 'omar2@gmail.com',],
        //     [
        //         'name' => 'Omar2',
        //         'email' => 'omar2@gmail.com',
        //         'password' => bcrypt('new_omar_123'),
        //         'avatar' => 'no avatar',
        //         'phone' => '0774237590',
        //     ]);

        //     dd($user);

        // $user = User::updateOrCreate([
        //     'email' => 'omar1@gmail.com',
        // ],
        // [
        //     'name' => 'Omar Jan',
        //     'email' => 'omarj@gmail.com',
        //     'password' => bcrypt('new_omarjan_123'),
        //     'avatar' => 'no avatar',
        //     'phone' => '0774037590',
        // ]);
        // dump($user);

        // $users = User::all();
        // return View::make('home', [
        //     'users' => $users
        // ]);

        // $user = User::find(8);
        // if($user)
        //     $user->delete();

        // $user = User::where('id', '=', 6);
        // if($user)
        //     $user->delete();
        // else
        //     'not found';

        // $comment = Comment::find(60);
        // // $comment->delete();
        // dd($comment);

        // $comment = Comment::withTrashed()->where('id', '=', 4)->first();
        // $comment = Comment::onlyTrashed()->where('id', '=', 4)->first();
        // dump($comment);
        // $comment = Comment::onlyTrashed()->where('id', '=', 6)->first();
        // $comment->restore();

        // $comment = Comment::find(6);
        // $comment->delete();
        // $comment = Comment::onlyTrashed()->where('id', '=', 6)->first();

        $comment = Comment::find(4);
        $comment->forceDelete();

        // dd($comment);
        // $comment->forceDelete();
        // $user = User::where('id', '=', 8)->
        // update([
        //     'name' => 'Mohamad Omar',
        //     'email' => 'Momar@gmail.com'
        // ]);
        // dump($user);
        // $user->email = 'mohamadali@gmai.com';
        // $user->name = 'Mohamad Ali';
        // dump($user->save());

        // dd($user->wasChanged('email'));
        // dd($user );

        // foreach($users as $user) {
        //     dump($user);
        // }
        // $users->map(function($user) {
        //     dump($user->name);
        // });
        // return View::make('home', [
        //     'users'=> $users,
        // ]);
    }
}
