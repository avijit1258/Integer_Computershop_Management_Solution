@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Catagory
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New catagories Form -->
                    <form action="{{ url('catagories') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- catagories Name -->
                        <div class="form-group">
                            <label for="catagory-name" class="col-sm-3 control-label">catagory</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="catagory-name" class="form-control" value="{{ old('catagory') }}">
                            </div>
                        </div>

                        <!-- Add catagories Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add catagory
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current catagoriess -->
            @if (count($catagories) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Catagory
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped catagory-table">
                            <thead>
                                <th>Catagory</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($catagories as $catagory)
                                    <tr>
                                        <td class="table-text"><div>{{ $catagory->name }}</div></td>

                                        <!-- catagories Delete Button -->
                                        <td>
                                           <form action="{{url('catagories/'. $catagory->id)}}" method="POST">

                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-catagory-{{ $catagory->id }}" class="btn btn-danger">
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
