@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                            @foreach($threads as $thread)
                                <article>
                                    <h3>{{ $thread->title }}</h3>
                                    <p class="body" style="padding-left: 20px">{{ $thread->body }}</p>
                                </article>
                            @endforeach
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
@endsection
