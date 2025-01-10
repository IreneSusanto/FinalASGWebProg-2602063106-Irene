@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('friends.update', $friends->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>@lang('crud.label_nama')</label>
            <input type="text" name="nama" value="{{ $friends->nama }}" required>
            
            <label>@lang('crud.label_gender')</label>
            <input type="text" name="gender" value="{{ $friends->gender }}" required>

            <label>@lang('crud.label_communicate')</label>
            <select name="communicate">
                @foreach ($communicate as $com)
                    <option value="{{ $communicate->id }}" {{ $friends->communicate == $communicate->id ? 'selected' : '' }}>
                        {{ $friends->communicate }}
                    </option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-primary">@lang('crud.btn_perbarui')</button>
        </form>
    </div>
</div>
@endsection
