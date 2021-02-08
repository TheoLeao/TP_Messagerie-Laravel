@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <a href="{{ route('home') }}" class="btn btn-secondary btn-sm m-1"> <-- Retour</a>
            <h2>Conversation avec {{$user->name}}</h2>
            <div class="card" style="height: 50vh; overflow: scroll">
                <div class="card-body">
                    @foreach ($messages as $message)
                    @if ($message->sender_id !== $authUser->id)
                    <div class="card bg-primary p-2 mt-3 rounded d-block float-left" style="width:55%">
                        <span class="card-title mb-0 text-white">{{$user->name}}:</span>
                        <p class="mb-0" style="color:white;">
                            {{$message->content}}
                        </p>
                    </div>
                    @else
                    <div class="card bg-dark p-2 mt-3 rounded d-block float-right" style="width:55%">
                        <p class="card-title mb-0 text-white">Moi: </p>
                        <div style="color:white">
                            {{$message->content}}
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    @error('message')
                    <div class="alert alert-danger">Le message est vide ou incorrect</div>
                    @enderror
                    <form action="{{ route('sendMessage', ['userID' => $user->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <h5>Ecrire un message</h5>

                            <textarea id="message" class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-2">Envoyer le message</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
