@extends('layouts.app')


@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                New User
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New users Form -->
                <form action="{{ url('users') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Name -->
                    <div class="form-group">
                        <label for="user-name" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-6">
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('user') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>

                        <div class="col-sm-6">
                            <input type="text" name="Name" id="Name" class="form-control" value="{{ old('user') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Role" class="col-sm-3 control-label"> Role </label>
                        <div class="col-sm-6">
                            <select name="role"  >

                                <option value="stock_manager" > Stock Manager  </option>
                                <option value="sells_man">
                                    Sells Man
                                </option> 
                                <option value="admin">
                                    Admin
                                </option>
                            </select>

                        </div>
                    </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label"> Password </label>
                            <div class="col-sm-6">
                              <input type="text" name="passowrd" id="passowrd" class="form-control" value="{{ old('user') }}">  
                            </div>
                        </div>


                            <!-- Add users Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-plus"></i>Add user
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Current userss -->
                @if (count($users) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Users
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped user-table">
                            <thead>
                                <th>User</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="table-text"><div>{{ $user->name }}</div></td>

                                    <!-- users Delete Button -->
                                    <td>
                                     <form action="{{url('users/'. $user->id)}}" method="POST">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-success">
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
