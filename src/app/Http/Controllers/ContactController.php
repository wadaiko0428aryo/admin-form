<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        // categoriesテーブルのデータを全件取得
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        // 入力データを取得
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel_1',
            'tel_2',
            'tel_3',
            'address',
            'building',
            'categories',
            'content',
        ]);

        // カテゴリ名を取得
        $categoryName = Category::find($contact['categories'])->categories;

        // カテゴリ名を$contact配列に追加
        $contact['categories_name'] = $categoryName;

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        // 入力データを取得
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel_1',
            'tel_2',
            'tel_3',
            'address',
            'building',
            'categories',
            'content',
        ]);

        // データを保存
        Contact::create($contact);
        return view('thanks');

    }

    public function register()
    {
        return view('register');
    }
        public function login()
    {
        return view('login');
    }
}