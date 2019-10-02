@extends('layouts.master')
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="table-responsive">
                    <legend>List User</legend>
                    <a class="btn btn-success" data-toggle="modal" href="#">Create New</a>

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $key => $user)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->image}}</td>
                                <td>
                                    <a href="javascript:void(0)" type="button" class="btn btn-warning">Edit</a>
                                    <a href="javascript:void(0)" type="button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">{{"Khong co du lieu"}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div><!-- /.container -->
@endsection
