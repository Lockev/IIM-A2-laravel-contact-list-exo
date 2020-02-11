@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Modification du contact <b>{{$contact->name}}</b></h3>
                <form class="mt-5" method="post" action="{{route('contacts.update', ['contact' => $contact->id])}}">
                  @csrf
                  @method("put")
                  <div class="form-group">
                    <label>Adresse Email : </label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" value="{{$contact->email}}">
                  </div>
                  <div class="form-group">
                    <label>Téléphone : </label>
                    <input type="text" name="tel" class="form-control" value="{{$contact->tel}}">
                  </div>
                  <button type="submit" class="btn btn-primary">Modifier mon profil</button>
                </form>
            </div>
        </div>
    </div>
@endsection
