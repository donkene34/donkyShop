@extends('layout.app')

@section('content')
    <div class="presentation_produit">
        <div class="img_produit"><img src="img/pro-big-1.jpg" alt=""></div>
        <div class="description">
        <h1>{{ $produit->title }}</h1>
            <h2>{{ $produit->slug }}</h2>
            <h2>{{ $produit->subtitle }}</h2>
            <p>{{ $produit->description }}</p>

        <form action="{{ route('cart.store') }}" method="post">
                @csrf
                <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                <button type="submit">ajouter au panier</button>
                <div class="button_hide"></div>
            </form>


        </div>
    </div>
@endsection
