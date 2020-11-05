@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Motor</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('motor.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Add</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Description</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Date</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>

                            @foreach($motors as $motor)
                                <tr>
                                    <td><a href="{{route('motor.edit', $motor)}}">{{$motor->nama}}</a></td>
                                    <td>{{$motor->description}}</td>
                                    <td>{{$motor->harga}}</td>
                                    <td>{{$motor->date}}</td>


                                    @if(isset($motor->creator->name))

                                    <td>{{$motor->creator->name}}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    <td>{{$motor->updated_at}}</td>
                                    <td>{{$motor->created_at}}</td>
                                    <td>
                                        <form action="{{route('motor.destroy', $motor)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


