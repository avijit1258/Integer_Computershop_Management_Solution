@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New SubCatagory
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New SubCatagory Form -->
                    <form action="{{ url('sub_catagories') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- SubCatagory Name -->
                        <div class="form-group">
                            <label for="sub_catagory-name" class="col-sm-3 control-label">SubCatagory</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="sub_catagory-name" class="form-control" value="{{ old('sub_catagory') }}">
                            </div>
                        </div>

                        <!-- Catagory Name -->
                        <label for="input_route"> Catagory </label>
                        <select name="catagory_id" class="form-control" >
                            @foreach( $catagories as $catagory)
                            {

                            <option value={{$catagory->id}} > {{$catagory->name}}  </option> 
                            }
                            @endforeach
                        </select>



                        <!-- Add SubCatagory Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add SubCatagory
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current SubCatagorys -->
            @if (count($sub_catagories) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current SubCatagory
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped sub_catagory-table">
                            <thead>
                                <th>SubCatagory</th>
                                <th>Catagory</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($sub_catagories as $sub_catagory)
                                    <tr>
                                        <td class="table-text"><div>{{ $sub_catagory->name }}</div></td>

                                        <td class="table-text"><div>{{\App\Catagory::findOrFail($sub_catagory->catagory_id)->name  }}</div></td>


                                        <!-- SubCatagory Delete Button -->
                                        <td>
                                            <form action="{{url('sub_catagories/' . $sub_catagory->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-sub_catagory-{{ $sub_catagory->id }}" class="btn btn-danger">
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
