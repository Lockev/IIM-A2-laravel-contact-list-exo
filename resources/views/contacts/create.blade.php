@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Créer un contact</h3>
                <form class="mt-3" method="POST" action="{{route('contacts.store')}}">
                  @csrf
                  <div class="form-group">
                    <label>Adresse Email : </label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nom complet : </label>
                    <input type="text" name="name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Téléphone : </label>
                    <input type="text" name="tel" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Créer mon profil</button>
                </form>
            </div>
        </div>
    </div>
@endsection
