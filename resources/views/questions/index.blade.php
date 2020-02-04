@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card text-white bg-secondary mb-12">
                <div class="card-header">All Questions</div>
                <div class="card-body">

                  @foreach ($qsts as $qst)

                      <span style="border:solid 0.5px {{ $qst->status }};padding:4px">
                      {{ $qst->views }} {{ \Str::plural('view', $qst->views) }},
                      {{ $qst->answers }} {{ \Str::plural('answers', $qst->answers) }},
                      {{ $qst->votes }} {{ \Str::plural('votes', $qst->votes) }}
                      </span>
                        <br><br>

                        <h5 class="card-title"><a href="{{ $qst->url }}"> {{ $qst->title }} </a></h5>
                        <p class="card-text">{{ \Str::limit($qst->body, 250) }}</p>
                        Asked by : <a href="{{ $qst->user->url }}"> {{ $qst->user->name }} </a>
                        <br><br>
                        <span class="small">
                            Created {{ $qst->created_date }}
                        </span>

                        <br>
                        <hr>
                  @endforeach

                </div>

                    {{ $qsts->links() }}


            </div>

    </div>
</div>
@endsection
