@extends('admin.layouts.master')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                    	<button class="btn btn-primary btn-fill"><i class="ti-plus"></i> Module</button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            	<th width="25%">Name</th>
                            	<th width="35%">Description</th>
                            	<th class="text-right" width="15%">Price</th>
                            	<th width="25%">Actions</th>
                            </thead>
                            <tbody>
                                @foreach($modules as $module)
                                <td>{{$module->name}}</td>
                                <td>{{$module->description}}</td>
                                <td class="text-right">{{number_format($module->price,2)}}</td>
                                <td><button class="btn btn-primary btn-fill"><i class="ti-pencil"></i></button> &ensp; <button class="btn btn-danger btn-fill"><i class="ti-trash"></i></button></td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/backend/module/update">
                <input type="hidden" name="id" value="0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Module</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
	$('#modules').addClass(' active ');
	$('#topText').text('Modules');
</script>
@endsection