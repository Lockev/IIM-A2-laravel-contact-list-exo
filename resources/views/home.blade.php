@extends('layouts.app')

<!-- TODO Dans la séction "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->

@section('content')
<div class="container">

  @forelse($users as $user) 
    <p>L'utilisateur {{$user->name}} à {{count($user->contacts)}} contacts</p>
  @empty 
    <p>Il n'y a pas encore d'utilisateur</p>
  @endforelse
    
</div>
@endsection
