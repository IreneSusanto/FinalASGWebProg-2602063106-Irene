@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{route('friends')}}" method="post">
            @csrf
            <label for="">gender</label>
            <input type="text" name="gender">
            <label for=""></label>
            <input type="text" name="nama" id="" required>
            <label for="">communicate</label>
            <select name="communicate" id="">
                @foreach ($communicate as $com)
                    <option value="{{$com->id}}">{{$com->chat}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
@endsection