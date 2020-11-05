@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Motor</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('motor.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tipe :</label>
                        <input type="text" class="form-control"  name="nama">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control"  name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Harga:</label>
                        <textarea type="text" class="form-control"  name="harga"></textarea>
                    </div>

                    <div class="form-group">
                        <select name="created_by" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name . '('. $user->email .')'}}</option>
                            @endforeach

                        </select>

                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <select name="created_by" id="">--}}
                    {{--                            @foreach($users as $user)--}}
                    {{--                                <option value ="{{ $user->id }}" >{{ $user->name.'('. $user->email.')' }}</option>--}}
                    {{--                            @endforeach--}}
                    {{--                        </select>--}}

                    {{--                    </div>--}}
                    <div class="form-group">
                        <label >Date:</label>
                        <input type="date" class="form-control"  name="date">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label>Price:</label>--}}
{{--                        <input type="text" class="form-control"  name="price">--}}
{{--                    </div>--}}

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
