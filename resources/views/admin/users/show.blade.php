@extends('admin._layout')

@section('title', 'Add User')

@section('content')
    
<div class="box box-info">
    <form class="form-horizontal">
        @csrf
        @method('put')
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Role</label>

                        <div class="col-sm-8">
                            <select name="admin" id="" class="form-control">
                                <option value="1" @if($user->admin)selected @endif>Administrator</option>
                                <option value="0" @if(!$user->admin)selected @endif>User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="company" placeholder="" value="{{$user->company}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Designation</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="designation" value="{{$user->designation}}" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Employee ID</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="employee_id" value="{{$user->employee_id}}" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Number</label>

                        <div class="col-sm-8">
                            <input type="tel" class="form-control" name="phone" value="{{$user->phone}}" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email *</label>

                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="" value="{{$user->email}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password</label>

                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="" minlength="6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Confirm Password</label>

                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="confirm_password" placeholder="" minlength="6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Buyer *</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="buyer" placeholder="" value="{{$user->buyer}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Factory</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="factory" placeholder="" value="{{$user->factory}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Order Name</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="order" placeholder="" value="{{$user->order}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Style</label>

                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="style" placeholder="" value="{{$user->style}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Comment/Remark</label>

                        <div class="col-sm-8">
                            <textarea name="comment" id="" cols="30" rows="4" class="form-control" >{{$user->comment}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <!-- <button type="submit" class="btn btn-info">Update</button> -->
        </div>
    </form>
</div>
@endsection