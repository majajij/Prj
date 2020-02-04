@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="card text-white bg-secondary mb-12">
                <div class="card-header">Create a question</div>
                <div class="card-body">

                  <form method="post" action="{{ route('questions.store') }}">
                    @csrf
                    <div class="form-column">

                      <div class="col-md-10 mb-10">

                        <label for="title">Title</label>
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title') }}">
                        <div class="invalid-feedback">
                          {{ $errors->first('title') }}
                        </div>

                        <label for="body">Body</label>
                        <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" rows="8" cols="80">{{ old('body') }}</textarea>
                        <div class="invalid-feedback">
                          {{ $errors->first('body') }}
                        </div>

                      </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Add Question</button>
                  </form>

                </div>

            </div>

    </div>
</div>
@endsection
