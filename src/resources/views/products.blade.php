@extends('layout.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/products.css') }}">
@endsection

@section('content')

  <div class="products-container">

    <div class="products-list">

      <div class="products-row">
        <h2 class="products-list__font">商品一覧</h2>

        <div class="products-add">
          <button class="products-add-title">+ 商品追加</button>
        </div>
      </div>

      <div class="products-content">
        <aside class="products-left">

          <div class="products-search">
            <form class="products-search__input" action="/products/search" method="post">
              @csrf
              <input class="products-search__item" type="search" name="keyword" placeholder="商品名で検索" value="">
              <div class="products-search__button">
                <button class="products-search__button-item" type="submit">検索</button>
              </div>

              <div class="products-price__font">
                <h4 class="products-price__titlle">価格順で表示</h4>
                <select name="sort">
                  <option value="" disabled selected>価格で並べ替え</option>
                  <option value="desc">高い順に表示</option>
                  <option value="asc">低い順に表示</option>
                </select>
              </div>
            </form>
        </aside>

      <div class="products-grid">

        @foreach ($products as $product)

          <div class="product-card">

            <div class="product-card__img">
              <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
            </div>

            <div class="product-card__body">
              <p class="product-card__name">{{ $product->name }}</p>
              <p class="product-card__price">¥{{ $product->price }}</p>
            </div>

          </div>
        @endforeach
      </div>

<div class="pagination">
  {{$product->link() }}
</div>


    </div>
  </div>
@endsection