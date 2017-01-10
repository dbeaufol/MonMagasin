@extends('templates.base')
@section('title', 'Magasin')
@section('content')
    <h1>C'est mon magasin</h1>
    @foreach ($products as $product)
    <div data-id='{{ $product->id}}' class="single-product">
      <img style="width: 10%;" src='/img/{{$product->img}}'>
      <p>{{ $product->name }}</p>
      <div>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price / 100 }}€</p>
        <button>Ajouter au panier</button>
      </div>
    </div>
    @endforeach
  <table id="product-table">
    <tr>
      <th>Nom</th>
      <th>Description</th>
      <th>Prix</th>
      <th>Taille</th>
      <th>Images</th>
      <th>panier</th>
    </tr>
    @foreach ($products as $product)
    <tr>
      <td>{{ $product->name }}</td>
      <td>{{ $product->description }}</td>
      <td>{{ $product->price / 100 }}</td>
      <td>{{ $product->height }} x {{ $product->width }}</td>
      <td><img style="width: 10%;" src='/img/{{$product->img}}'></td>
      <td><button>Ajouter au panier</button></td>
    </tr>
    @endforeach
  </table>
</br>
</br>
</br>
</br>
@endsection
