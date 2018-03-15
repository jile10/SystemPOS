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
                    	<button class="btn btn-primary btn-fill" data-toggle="modal" data-target="#createModule"><i class="now-ui-icons ui-1_simple-add"></i>&ensp;Module</button>
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
                                <tr>
                                    <td>{{$module->name}}</td>
                                    <td>{{$module->description}}</td>
                                    <td class="text-right">{{number_format($module->price,2)}}</td>
                                    <td><button class="btn btn-info btn-icon" data-toggle="modal" data-target="#updateModule{{$module->id}}"><i class="now-ui-icons design-2_ruler-pencil"></i></button> &ensp; <button class="btn btn-danger btn-icon" data-toggle="modal" data-target="#deleteModule{{$module->id}}"><i class="now-ui-icons ui-1_simple-remove"></i></button></td>
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

<!-- Create Modal -->
<div class="modal fade" id="createModule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/module/update" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Module</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description..."></textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputEmail4">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Modal -->
@foreach($modules as $module)
<div class="modal fade" id="updateModule{{$module->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/module/update" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$module->id}}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Module</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$module->name}}">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="inputEmail4">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description...">{{$module->description}}</textarea>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="inputEmail4">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price" value="{{$module->price}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Delete Module -->
@foreach($modules as $module)
<div class="modal fade" id="deleteModule{{$module->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/backend/delete" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$module->id}}">
                <input type="hidden" name="model" value="App\Module">
                <input type="hidden" name="route_name" value="/backend/modules">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Are you sure you want to delete <b><em>{{$module->name}}</em></b></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('js')
<script type="text/javascript">
	$('#modules').addClass(' active ');
	$('#topText').text('Modules');
</script>
@endsection