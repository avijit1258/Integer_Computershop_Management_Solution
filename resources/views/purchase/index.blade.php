@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		
		<div class="panel panel-primary">
			
			<div class="panel-heading">
				purchase Product
			</div>

			<div class="panel-body">
			<form action="{{ url('/purchases')}}" method="post">
				<div id="product_select_list">
					<a href="javascript:;" onclick="AddMoreProduct()">ADD</a>
					<div id="product_select">
					<label>1</label>
					<label>products</label>
					<select id="products_select" name="products_id">
						@foreach( $products as $product)
                                {
                                <option value={{$product->id}} > {{$product->model}}  </option> 
                                }
                                @endforeach
					</select>
					<label>Vendor</label>
					<select id="vendors_select" name="vendors_id">
						@foreach( $vendors as $vendor)
                                {
                                <option value={{$vendor->id}} > {{$vendor->name}}  </option> 
                                }
                                @endforeach
					</select>
					


					<label>Quantity</label>
					<input type="double" name="quantity[]" placeholder="Quantity">
					<br>
					<label>Unit Sale Price</label>
					<input type="double" name="unit_sale_price[]" placeholder="Unit Sale Price">
					<br>
					<label>Unit Purchase Price</label>
					<input type="double" name="unit_purchase_price[]" placeholder="Unit purchase Price">

					</div>
				</div>

				</div>
				
				<button type="submit" class = "btn btn-default"> <i class="fa fa-btn fa-plus"></i>Save</button>

			</form>
				
			</div>

		</div>

</div>

<div id="product_sell_load_area" style="display: none">
					<br>
					<label>Products</label>
					<select id="product_select" name="product_id">
						@foreach( $products as $product)
                                {
                                <option value={{$product->id}} > {{$product->model}}  </option> 
                                }
                                @endforeach
                     </select>
                     <label>Vendors</label>

					<select id="vendors_select" name="vendors_id">
						@foreach( $vendors as $vendor)
                                {
                                <option value={{$vendor->id}} > {{$vendor->name}}  </option> 
                                }
                                @endforeach
					</select>
					
					<label>Quantity</label>
					<input type="double" name="quantity[]" placeholder="Quantity">
					<br>
					<label>Unit Sale Price</label>
					<input type="double" name="unit_sale_price[]" placeholder="Unit Sale Price">

					<br>
					<label>Unit Purchase Price</label>
					<input type="double" name="unit_purchase_price[]" placeholder="Unit purchase Price">


</div>

<script type="text/javascript">
	var serial = 2;
	function AddMoreProduct() {
		var purchaseProduct = $('#product_sell_load_area').html();

		$('#product_select_list').append("<br><label>"+serial+"</label><br>"+purchaseProduct);
		serial = serial + 1;
	}

</script>
@endsection

<!-- $('select[name="catagory_id"]').change(function()
		{
			$.get('/subproducts_of_catagory/'+$('#catagory_select').val(), function(data)
			{
				var Data = " ";

				for(var i = 1; i <= data.length ; i++)
				{
					Data += "<option name='sub_catagory_id' value='"+data[i].id+"'>+'"data[i].name"'+</option>";
				}
				$('#sub_catagory_select').html(Data);
			});
		}); -->