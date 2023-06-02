<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Clients;

class MainController extends Controller
{

    public function main_page(): View{
        return view('landing');
    }

    public function teachers_page(): View{
        return view('teachers');
    }

    public function contacts_page(): View{
        return view('contacts');
    }

    public function form(Request $req) {

        $data = $req->validate([
            'name' => 'required',
            'phone' => ['required', 'digits:10'],
        ],[ 'name.required' => 'введіть ім\'я',
            'phone.required' => 'введіть телефон',
            'phone.digits' => 'телефон має складатись з 10 цифр',
        ]);

        if ($data) {
            $contact = new Clients();
            $contact->name = $req->input('name');
            $contact->phone = $req->input('phone');
            $contact->save();

            return redirect()->back()->with('success', true);
        }

    }

}
