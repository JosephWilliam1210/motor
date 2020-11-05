@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Motor</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('motor.update', $motor)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control"  name="nama" value="{{ $motor->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control"  name="description">{{ $motor->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <select name="created_by" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name . '('. $user->email .')'}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga:</label>
                        <textarea type="text" class="form-control"  name="harga">{{ $motor->harga}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Date:</label>
                        <input type="date" class="form-control"  name="date" value="{{ $motor->date }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
