@extends('layouts.app1')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories Product</h4>
                        <p class="category">Here is a subtitle for this table</p>
                    </div>
                    <div class="card-content table-responsive table-full-width">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Category Name</th>
{{--                                <th>Category Name</th>--}}
{{--                                <th class="text-right">Salary</th>--}}
                                <th class="text-right">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cate as $categories)
                                <tr>
                                    <td class="text-center">{{$categories->CategoryID}}</td>
                                    <td>{{$categories->CategoryName}}</td>
{{--                                    <td></td>--}}
                                    <td class="td-actions text-right">
                                        <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                            <i class="ti-user"></i>
                                        </a>
                                        <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                            <i class="ti-pencil-alt"></i>
                                        </a>
                                        <a href="#" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                            <i class="ti-close"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
