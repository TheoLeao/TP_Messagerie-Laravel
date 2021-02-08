@extends('layouts.app')

@section('content')
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
                    @if($user->id !== Auth::user()->id)
                    <tr>
                        <td><a href="{{ route('showConversation', ['userID' => $user->id])}}">{{$user->name}}</a></td>
                        <td><a type="button" class="btn btn-primary" href="{{ route('showConversation', ['userID' => $user->id])}}">Envoyer un message</a></td>
                    </tr>
                    @endif

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
