@extends('layout.base')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-xl-4"></div>
            <div class="col-xl-4">
                <h1>details produits</h1>
                @if ($message = Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>


                @endif
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    <label for="name">Nom du produit</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Saisir le nom di produit ici..."><br>

                    <label for="price">Prix du produit</label>
                    <input type="number"  id="price" name="price" placeholder="Saisir le nom di produit ici..." min="0" max="10000000" value="0" class="form-control"><br>

                    <label for="description">Description du produit</label>
                    <textarea name="description" class="form-control" id="description" placeholder="Saisir la description ici..." rows="4"></textarea><br>
                    <div>
                        <label for="file">Image de couverture</label>
                    <input type="file" name="file" id="file" placeholder="Inserer un fichier" class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Publier</button>

                </form>
            </div>
            <div class="col-xl-4"></div>
        </div>
    </div>
@endsection