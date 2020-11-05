@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Tambah Merk</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control"  name="name">
                    </div>
                    <div class="form-group">
                        <label>Email :</label>
                        <textarea type="text" class="form-control"  name="email"></textarea>
                    </div>




                    {{--                    <div class="form-group">--}}
                    {{--                        <select name="created_by" id="">--}}
                    {{--                            @foreach($users as $user)--}}
                    {{--                                <option value ="{{ $user->id }}" >{{ $user->name.'('. $user->email.')' }}</option>--}}
                    {{--                            @endforeach--}}
                    {{--                        </select>--}}

                    {{--                    </div>--}}

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
