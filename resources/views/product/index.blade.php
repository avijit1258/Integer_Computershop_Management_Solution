@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New product
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New catagories Form -->
                    <form action="{{ url('products/') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- catagories Name -->
                        <div class="form-group">
                            <label for="Model" class="col-sm-3 control-label">Model</label>
                        
                              <div class="col-sm-6">
                                <input type="text" name="model" id="model" class="form-control" value=" ">
                            </div>
                        </div>
                         <!-- Brand -->
                                                
                       <label for="input_route"> sub_catagory </label>
                        <select name="sub_catagory_id" class="form-control" >
                            @foreach( $sub_catagories as $sub_catagory)
                            {

                            <option value={{$sub_catagory->id}} > {{$sub_catagory->name}}  </option> 
                            }
                            @endforeach
                        </select>

                            <div class="form-group">
                            <label for="specification" class="col-sm-3 control-label">specification</label>

                            <div class="col-sm-6">
                                <input type="text" name="specification" id="specification" class="form-control" value=" ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="details" class="col-sm-3 control-label">details</label>

                            <div class="col-sm-6">
                                <input type="text" name="details" id="details" class="form-control" value="">
                            </div>
                        </div>

                           
                        

                        <!-- Add catagories Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add product
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current catagoriess -->
            @if (count($products) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current product
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped product-table">
                            <thead>
                                <th>product</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="table-text"><div>{{ $product->name }}</div></td>
                                        <td class="table-text"><div>{{ $product->name }}</div></td>

                                        <!-- catagories Delete Button -->
                                        <td>
                                            <form action="{{url('product/' . $product->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-product-{{ $product->id }}" class="btn btn-danger">
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
