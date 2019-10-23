@extends('layouts.blank')
@section('title')
    Edit Individual
@endsection
@section('content')
    <br><h2>@lang('sentences.individualTitleE')</h2>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/personal/{{ $data->email }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">@lang('sentences.individualFormLabelA')</label>
            <div class="col-sm-10">
                <h3>{{ $data->email }}</h3>
            </div>
        </div>
        <div class="form-group">
            <label for="first_name">@lang('sentences.individualFormLabelB')</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Diego Andres" value="{{ $data->first_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">@lang('sentences.individualFormLabelC')</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Rarranza Rivera" value="{{ $data->last_name }}">
        </div>
        <button type="submit" class="btn btn-success">@lang('sentences.generalButtonUpdate')</button>
    </form>
@endsection