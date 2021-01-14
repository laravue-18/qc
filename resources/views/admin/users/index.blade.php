@extends('admin._layout')

@section('title', 'Users')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <table id="list" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Mobile Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $row)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$row->email}}</th>
                            <th>{{$row->admin ? 'Admin' : 'User' }}</th>
                            <th>{{$row->phone}}</th>
                            <th>
                                <a href="{{route('admin.users.show', $row->id)}}" class="btn btn-info mr-2">
                                    <i class="fa fa-info"></i> 
                                </a>
                                <a href="{{route('admin.users.edit', $row->id)}}" class="btn btn-success mr-2">
                                    <i class="fa fa-edit"></i> 
                                </a>
                                <a href="{{route('admin.users.destroy', $row->id)}}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> 
                                </a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script>
  $(function () {
    $('#list').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
@endsection