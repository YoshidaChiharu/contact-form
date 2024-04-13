@extends('layouts.app')

@section('link')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
        </div>
        <form action="/contacts/confirm" method="post" class="form">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--title">お名前</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="テスト太郎">
                    </div>
                    <div class="form__error">
                        <!-- バリデーション機能を実装後に記述 -->
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--title">メールアドレス</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="email" placeholder="test@example.com">
                    </div>
                    <div class="form__error">
                        <!-- バリデーション機能を実装後に記述 -->
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--title">電話番号</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="tell" placeholder="09012345678">
                    </div>
                    <div class="form__error">
                        <!-- バリデーション機能を実装後に記述 -->
                        @error('tell')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--title">お問い合わせ内容</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="content" placeholder="資料をいただきたいです">
                    </div>
                    <div class="form__error">
                        <!-- バリデーション機能を実装後に記述 -->
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
@endsection