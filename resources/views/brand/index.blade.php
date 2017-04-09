@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    New Brand
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New catagories Form -->
                    <form action="{{ url('brands') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- catagories Name -->
                        <div class="form-group">
                            <label for="brand-name" class="col-sm-3 control-label">brand</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="brand-name" class="form-control" value="{{ old('brand') }}">
                            </div>
                        </div>

                        <!-- Add catagories Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Brand
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current catagoriess -->
            @if (count($brands) > 0)
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Current brand
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped catagory-table">
                            <thead>
                                <th>Brand</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td class="table-text"><div>{{ $brand->name }}</div></td>

                                        <!-- catagories Delete Button -->
                                        <td>
                                            <form action="{{url('brands/' . $brand->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-brand-{{ $brand->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
