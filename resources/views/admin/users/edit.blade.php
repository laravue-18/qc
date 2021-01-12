@extends('admin._layout')

@section('title', 'Add Administrator')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <form class="form-horizontal" action="{{route('admin.admins.update', $user->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Ex: Modern Web Expert">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Ex: yurijklimovv@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" value="" name="password" placeholder="********">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Submint</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection