@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}"/>
@endsection

@section('content')
<main>
<div class="confirm__content">
    <div class="confirm__heading">
    <h2>Confirm</h2>
    </div>
    <form class="form" action="/contact" method="post">
    @csrf

    <div class="confirm-table">
        <table class="confirm-table__inner">
        <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">電話番号</th>
            <td class="confirm-table__text">
                <div class="input">
                <input type="tel" name="tel_1" value="{{ $contact['tel_1'] }}" readonly>
                <input type="tel" name="tel_2" value="{{ $contact['tel_2'] }}" readonly>
                <input type="tel" name="tel_3" value="{{ $contact['tel_3'] }}" readonly>
                </div>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">建物名</th>
            <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容の種類</th>
            <td class="confirm-table__text">
                <input type="text" name="categories" value="{{ $contact['categories_name'] }}" readonly>
            </td>
        </tr>

        <tr class="confirm-table__row">
            <th class="confirm-table__header">お問い合わせ内容</th>
            <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
            </td>
        </tr>
    </table>
    </div>

    <div class="button">
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="fix">
            <a href="/" class="fix__link">修正</a>
        </div>
    </div>

    </form>
</div>
</main>
@endsection