@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Update SubCatagory
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New SubCatagory Form -->
                    <form action="{{ url('sub_catagories/'.$sub_catagory->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}

                        <!-- SubCatagory Name -->
                        <div class="form-group">
                            <label for="sub_catagory-name" class="col-sm-3 control-label">SubCatagory</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="sub_catagory-name" class="form-control" value="{{$sub_catagory->name}}">
                            </div>
                        </div>

                        <!-- Catagory Name -->
                        <div class="form-group">
                            <label for="input_route" class="col-sm-3 control-label"> Catagory </label> 
                            <div class="col-sm-6">
                                 <select name="catagory_id" class="form-control" >
                                    @foreach( $catagories as $catagory)
                                    {
                                        @if($catagory->id == $sub_catagory->catagory_id)
                                            <option value={{$catagory->id}} selected = "Selected"> {{$catagory->name}}  </option> 
                                        @else
                                            <option value={{$catagory->id}} > {{$catagory->name}}  </option> 
                                        @endif
                                    }
                                    @endforeach
                                </select>
         
                            </div>   
                        </div>
                        
                       


                        <!-- Add SubCatagory Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-plus"></i>Update SubCatagory
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>
    </div>
@endsection
