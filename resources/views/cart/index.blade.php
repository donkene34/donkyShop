@extends('layout.app')

@section('content')
  <section>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>titre</th>
                <th>quantite</th>
                <th>prix</th>
            </tr>
        </thead>
     @foreach (Cart::content() as $produit)
         <tr>
         <td>{{ $produit->model->id }}</td>
         <td>{{ $produit->model->title }}</td>
         <td>{{ $produit->model->description }}</td>
         <td>{{ $produit->model->price }}</td>
         <td>
         <form action="{{ route('cart.destroy',['rowId' => $produit->rowId]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">supprimer ce produit</button>
        </form>
         </td>
         </tr>
     @endforeach
    </table>
  </section>
  <section class="detail">
      <h1>details de la commande</h1>
      <table>
          <tr>
              <th>sous-total </th>
            <td>{{ Cart::subtotal() }}</td>
          </tr>
          <tr>
              <th>tax</th>
          <td>{{ Cart::tax() }}</td>
          </tr>
          <tr>
              <th>total a payer</th>
          <td>{{ Cart::total() }}</td>
          </tr>
      </table>
  </section>
@endsection
