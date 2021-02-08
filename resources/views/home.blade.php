@extends('layouts.app')

@section('content')
@isset($users)
<p>users exist</p>
@endisset
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nom de l'utilisateur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td><a type="button" class="btn btn-primary" href="{{ route('showConversation', ['userID' => $user->id])}}">Envoyer un message</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
