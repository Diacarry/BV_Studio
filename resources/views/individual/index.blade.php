@extends('layouts.blank')
@section('title')
    Individuals
@endsection
@section('content')
    <div class="flex-center position-ref full-height"><br>
        <div class="card">
            <div class="card-header">
                <h2>@lang('sentences.individualTitleA')</h2>
            </div>
            <div class="card-body">
            <p><a href="companies/create" class="btn btn-success">@lang('sentences.individualButtonCreate')</a></p>
                <div class="card">
                    <div class="card-header">@lang('sentences.individualTitleB')</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">@lang('sentences.tableEmail')</th>
                                    <th scope="col">@lang('sentences.tableFirstName')</th>
                                    <th scope="col">@lang('sentences.tableLastName')</th>
                                    <th scope="col">@lang('sentences.tableButtonEdit')</th>
                                    <th scope="col">@lang('sentences.tableButtonDelete')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $info)
                                    <tr>
                                        <th>{{ $info->email }}</th>
                                        <td>{{ $info->first_name }}</td>
                                        <td>{{ $info->last_name }}</td>
                                        <td><a href="/personal/{{ $info->email }}/edit" class="btn btn-warning"></a></td>
                                        <td>eliminar
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <div class="alert alert-danger" role="alert">
                                            @lang('sentences.warningA')
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection