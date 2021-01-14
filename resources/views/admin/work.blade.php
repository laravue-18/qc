@extends('admin._layout')

@section('title', 'QC Work')

@section('style')
<livewire:styles />
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Inspector Information:</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                <tbody>
                    <tr>
                    <td>Inspector Name:</td>
                    <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                    <td>Designation:</td>
                    <td>{{$user->designation}}</td>
                    </tr>
                    <tr>
                    <td>E-mail:</td>
                    <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                    <td>Company:</td>
                    <td>{{$user->company}}</td>
                    </tr>
                    <tr>
                    <td>Phone:</td>
                    <td>{{$user->phone}}</td>
                    </tr>
                    <tr>
                    <td>Inspection Date:</td>
                    <td>{{$user->created_at}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Buyer Information:</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                <tbody>
                    <tr>
                    <td>Buyer Name:</td>
                    <td>{{$user->buyer}}</td>
                    </tr>
                    <tr>
                    <td>Order Name:</td>
                    <td>{{$user->order}}</td>
                    </tr>
                    <tr>
                    <td>Factory Name:</td>
                    <td>{{$user->factory}}</td>
                    </tr>
                    <tr>
                    <td>Style Name:</td>
                    <td>{{$user->style}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Product Information:</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                <tbody>
                    <tr>
                    <td>Product Time:</td>
                    <td>{{$user->period}} Days(Started at {{$user->created_at->format('d/m/Y')}})</td>
                    </tr>
                    <tr>
                    <td>Remaining Time:</td>
                    <td>{{\Carbon\Carbon::now()->diffInDays($user->created_at, false) + $user->period}} Days</td>
                    </tr>
                    <tr>
                    <td>Order Quantity:</td>
                    <td>{{$user->quantity}} PCS</td>
                    </tr>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <livewire:counter />
    </div>
</div>    

@endsection


@section('script')
<livewire:scripts />
@endsection