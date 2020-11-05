@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Edit Merk</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('user.update', $user)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control"  name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <textarea type="text" class="form-control"  name="email">{{ $user->email}}</textarea>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
