<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        // $param = [
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "tell" => $request->tel,
        //     "content" => $request->content,
        // ];
        // return view('confirm', $param);
        $param = $request->only(['name', 'email', 'tell', 'content']);
        return view('confirm', $param);
    }

    public function store(Request $request)
    {
        $form = $request->only(['name', 'email', 'tell', 'content']);
        Contacts::create($form);
        return view('thanks');
    }
}
