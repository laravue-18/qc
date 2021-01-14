<div wire:poll>
    <div class="box">
        <div class="box-body">
            <table id="list" class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>QC Name</th>
                        <th>Buyer_Name</th>
                        <th>Order_No</th>
                        <th>Total Order</th>
                        <th>Completed</th>
                        <th>View Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->buyer }}</td>
                        <td>{{$row->order}}</td>
                        <td>{{$row->quantity}}</td>
                        <td>{{$row->pass + $row->alter + $row->washing + $row->sewing + $row->finishing + $row->reject + $row->other}}</th>
                        <td><a href="{{route('work_detail', $row->id)}}" class="btn btn-primary">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>