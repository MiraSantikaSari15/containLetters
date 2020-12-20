@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Text 1') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('text_1') is-invalid @enderror" name="text_1" value="{{ old('text_1') }}" required autocomplete="text_1" autofocus>

                                @error('text_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Text 2') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('text_2') is-invalid @enderror" name="text_2" value="{{ old('text_2') }}" required autocomplete="text_2" autofocus>

                                @error('text_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
