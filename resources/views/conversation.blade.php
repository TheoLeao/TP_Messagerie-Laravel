@extends('layouts.app')

@section('content')
@isset($messages)
<p>Messages exist</p>
{{$messages}}
@endisset
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>Conversation avec {{$user->name}}</h2>
            <div class="card">
                <div class="card-body">
                    @foreach ($messages as $message)
                        @if ($message->sender_id !== $authUser->id)
                        <div class="card bg-primary p-2 mt-3 rounded d-block float-left" style="width:55%">
                            <span class="card-title mb-0 text-white">{{$user->name}}</span>
                            <p class="mb-0" style="color:white;">
                                {{$message->content}}
                            </p>
                        </div>
                        @else
                        <div class="card bg-dark p-2 mt-3 rounded d-block float-right" style="width:55%">
                            <p class="card-title mb-0 text-white">{{$authUser->name}}</p>
                            <div style="color:white">
                                {{$message->content}}
                            </div>
                        </div>
                        @endif

                    @endforeach





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
