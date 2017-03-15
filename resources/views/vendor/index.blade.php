@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Vendor
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New catagories Form -->
                    <form action="{{ url('vendor') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- catagories Name -->
                        <div class="form-group">
                            <label for="vendor-name" class="col-sm-3 control-label">Vendor name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" placeholder="vendor name"  id="vendor-name" class="form-control" value="{{ old('vendor') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="vendor_adress" class="col-sm-3 control-label">adress</label>

                            <div class="col-sm-6">
                                <input type="text" name="adress" placeholder="adress" id="vendor_adress" class="form-control" value="{{ old('vendor') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contact_number" class="col-sm-3 control-label">contact_No</label>

                            <div class="col-sm-6">
                                <input type="text" name="contact_number" placeholder="contact_info" id="contact_number" class="form-control" value="{{ old('vendor') }}">
                            </div>
                        </div>

                        <!-- Add catagories Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>GO
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current catagoriess -->
            @if (count($vendors) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                       New Vendor
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped catagory-table">
                            <thead>
                                <th>Vendor</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($vendors as $vendor)
                                    <tr>
                                        <td class="table-text"><div>{{ $vendor->name }}</div></td>

                                        <!-- catagories Delete Button -->
                                        <td>
                                           <form action="{{url('vendors/' . $vendor->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-vendor-{{ $vendor->id }}" class="btn btn-danger">
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
