@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Merk</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{route('user.create')}}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Add</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">List Motor</th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td><a href="{{route('user.edit', $user)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>

                        <td>
                            @foreach($user->motors as $motor)
                                <li>{{$motor->nama}}</li>
                            @endforeach
                        </td>
                        <td>

                            <form action="{{route('user.destroy', $user)}}" method="post">
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
