@extends('layout.app')
@section('content')
    <section class="bienvenue">bienvenue chez donkyShop votre plateforme d'achat et de location d'immobilier</section>
    <section class="articles">
        @foreach ($produits as $produit)
            <div class="article">
                <div class="noir">prix: {{ $produit->price }}</div>
                <img src="{{ $produit->image }}" alt="">
                <a href="{{ route('produit.show',['id' => $produit->id]) }}"><button>en savoir plus</button></a>
            </div>
        @endforeach
    </section>
    <footer>
        fait par DONFACK NGUIMFACK Dilane
    </footer>
@endsection
