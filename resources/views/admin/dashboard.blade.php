@extends('admin.layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card pr-3 pl-3 pt-3">
                    <div class="header">
                    	Orders
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            	<th width="20%">Company Name</th>
                            	<th width="15%">Company Contact</th>
                            	<th width="40%">System and Module</th>
                                <th width="15%" class="text-right">Price (Php)</th>
                                <th width="10%">Date</th>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->customer->name}}</td>
                                    <td>{{$order->customer->contact}}</td>
                                    <td>
                                    	@foreach($order->order as $or)
                                    		{{$or->system_name}} - 
                                    		@foreach($or->modules as $module)
                                    		@if($loop->last)
	                                        {{$module->module_name}}
	                                        @else
	                                        {{$module->module_name}},
	                                        @endif
                                    		@endforeach
                                    		@if(!$loop->last)
                                    		|
                                    		@endif
                                    	@endforeach
                                    </td>
                                    <td class="text-right">{{number_format($order->amount,2)}}</td>
                                    <td>{{Carbon\Carbon::parse($order->created_at)->format('m-d-Y')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	$('#dashboard').addClass(' active ');
	$('#topText').text('Dashboard');
</script>
@endsection