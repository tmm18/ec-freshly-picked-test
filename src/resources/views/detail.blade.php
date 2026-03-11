@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="detail">
        <div class="detail-inner">

            <div class="detail-title">
                <a href="/products">商品一覧</a> ＞ {{ $product->name }}
            </div>

            <div class="detail-content">
                <div class="detail-left">
                    <div class="detail-image">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    </div>
                </div>

                <div class="detail-right">
                    <div class="detail-group">
                        <label class="detail-label">商品名</label>
                        <input class="detail-input" type="text" value="{{ old('name', $product->name) }}">
                    </div>

                    <div class="form-error">
                        @error('name')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="detail-group">
                        <label class="detail-label">値段</label>
                        <input type="text" name="price" value="{{ old('price', $product->price) }}">
                    </div>

                    <div class="form-error">
                        @error('price')
                            <p class="error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="detail-group">
                        <label class="detail-label">季節</label>
                        <div class="detail-season">
                            <label><input type="radio" disabled> 春</label>
                            <label><input type="radio" disabled> 夏</label>
                            <label><input type="radio" disabled> 秋</label>
                            <label><input type="radio" disabled> 冬</label>
                        </div>
                    </div>
                    @error('season')
                        <p class="error">{{ $message }}</p>
                    @enderror

                </div>
            </div>

            <div class="detail-description-area">
                <label class="detail-label">商品説明</label>
                <textarea class="description">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-error">
                @error('description')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="information">
                <a href="/products" class="back-button">戻る</a>

                <form action="/products/{{ $product->id }}/update" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="form-update" type="submit">変更を保存</button>
                </form>

                <form class="form-delete" action="/products/{{ $product->id }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </div>

        </div>
    </div>
@endsection