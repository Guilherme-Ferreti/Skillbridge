<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

final class StoreContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name'  => ['required', 'string', 'max:50'],
            'email'      => ['required', 'string', 'max:50', 'email'],
            'phone'      => ['required', 'string', 'max:20'],
            'subject'    => ['required', 'string', 'max:80'],
            'message'    => ['required', 'string', 'max:1000'],
        ]);

        Contact::create($data);

        $request->session()->flash('contact_created', true);

        return redirect()->back();
    }
}
