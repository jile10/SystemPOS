@extends('home.layouts.master')
@section('content')
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>My Cart</h1>
            	@if(session()->has('cart'))
				<div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        	<th width="25%">Name</th>
                            <th width="50%">Modules</th>
                        	<th width="25%">Amount</th>
                        </thead>
                        <tbody>
                            @foreach($carts as $cart)
                            <tr>
	                            <td>{{$cart['system_name']}}</td>
	                            <td>@foreach($cart['modules'] as $module)
	                                @if($loop->last)
	                                {{$module['module_name']}}
	                                @else
	                                {{$module['module_name']}},
	                                @endif
	                                @endforeach
	                            </td>
                            	<td>{{number_format($cart['total'])}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-round btn-info" data-toggle="modal" data-target="#placeOrder">Place Order</button>
                @endif
			</div>
		</div>
	</div>
</section>

<!-- place order -->
<div class="modal fade" id="placeOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/placeorder" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Place Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Company Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Company Name" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Contact Number</label>
                            <input type="text" name="contact" class="form-control" placeholder="Contact Number" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Company Address</label>
                            <textarea class="form-control" name="address" placeholder="Address..." required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection

