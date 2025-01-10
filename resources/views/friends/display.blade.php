@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <label>@lang('crud.label_nama')</label>
        <h3>{{ $datafriends[0]->nama }}</h3>
        
        <label>@lang('crud.label_gender')</label>
        <h3>{{ $datafriends[0]->gender }}</h3>

        <label>@lang('crud.label_communicate')</label>
        <h3>{{ $datafriends[0]->communicate}}</h3>


    </div>
</div>
@endsection()