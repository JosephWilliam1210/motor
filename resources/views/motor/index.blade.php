@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/077067300_1567575292-vespa-4402984_1920.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/harga-vespa-primavera-sean-wotherspoon.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/piaggio-vespa-1255ed09ba4a5485.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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


