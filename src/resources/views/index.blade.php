@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
        <form class="form" action="/contact/confirm" method="post">
        @csrf
<!-- name -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text--name">
                    <input type="text" name="first_name" placeholder="例：山田"  value="{{old('first_name')}}"/>
                    <input type="text" name="last_name" placeholder="例：太郎" value="{{old('last_name')}}"/>
                </div>
                <div class="form__error">
                    @error('first_name')
                        {{$message}}
                    @enderror
                    @error('last_name')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- gender -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text--gender">
                    <label>
                        <input type="radio" name="gender" value="男性"> 男性
                        <input type="radio" name="gender" value="女性"> 女性
                        <input type="radio" name="gender" value="その他"> その他
                    </label>
                </div>
                <div class="form__error">
                    @error('gender')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- メアド -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例：test@example.com" value="{{old('email')}}"/>
                </div>
                <div class="form__error">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- tel -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text--tel">
                <input type="tel" name="tel_1" placeholder="080" value="{{old('tel_1')}}"/>
                <div class="hyphen">-</div>
                <input type="tel" name="tel_2" placeholder="1234" value="{{old('tel_2')}}"/>
                <div class="hyphen">-</div>
                <input type="tel" name="tel_3" placeholder="5678"value="{{old('tel_3')}}" />
                </div>
                <div class="form__error">
                    @error('tel_1')
                        {{$message}}
                    @enderror
                    @error('tel_2')
                        {{$message}}
                    @enderror
                    @error('tel_3')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- 住所 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}"/>
                </div>
                <div class="form__error">
                    @error('address')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- 建物名 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101号室" value="{{old('building')}}"/>
                </div>
            </div>
        </div>
<!-- お問い合わせの種類 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select name="categories" id="category" class="form-control">
                    <option value="">選択してください</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->categories }}</option>
                    @endforeach
                </select>
                <div class="form__error">
                    @error('categories')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>
<!-- お問い合わせ内容 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記入ください"value="{{old('content')}}"></textarea>
                </div>
                <div class="form__error">
                    @error('content')
                        {{$message}}
                    @enderror
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
        </div>
    </main>
@endsection

