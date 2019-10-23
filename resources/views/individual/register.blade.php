@extends('layouts.blank')
@section('title')
    Add Individual
@endsection
@section('content')
    <br><h2>@lang('sentences.individualTitleC')</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/personal" method="POST">
        @csrf
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">@lang('sentences.individualFormLabelA')</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@individual.com" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">@lang('sentences.individualFormLabelB')</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Diego Andres" value="{{ old('first_name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">@lang('sentences.individualFormLabelC')</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Carranza Rivera" value="{{ old('last_name') }}">
            </div>
        </div>
        <div class="form-group">
            <label for="captcha">Captcha</label>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
        </div>
        <button type="submit" class="btn btn-primary">@lang('sentences.generalButtonRegister')</button>
    </form>
@endsection