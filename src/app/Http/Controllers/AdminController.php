<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
        public function index(Request $request)
    {
        // 検索機能
        $keyword = $request->input('keyword');

        $contacts = Contact::query()
            ->when($keyword, function ($query, $keyword) {
                return $query->where('name', 'like', "%{$keyword}%")
                    ->orWhere('email', 'like', "%{$keyword}%");
            })
            ->paginate(10);

        return view('admin.index', compact('contacts'));
    }
}
