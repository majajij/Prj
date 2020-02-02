@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card text-white bg-info mb-12">
                <div class="card-header">All Questions</div>
                <div class="card-body">

                  @foreach ($qsts as $qst)
                        <h5 class="card-title">{{ $qst->title }}</h5>
                        <p class="card-text">{{ \Str::limit($qst->body, 250) }}</p>
                        <br>

                  @endforeach

                </div>
                
                    {{ $qsts->links() }}


            </div>

    </div>
</div>
@endsection
