<div wire:poll>
    <div class="box">
        <div class="box-body">
            <table id="list" class="table table-bordered table-hover table-striped">
                <tbody>
                    <tr>
                        <td>Inspector Name: </td>
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

                    <tr>
                    <td width="40%">
                    Pass
                    </td>
                    <td width="">
                    {{$user->pass}}
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        Alter
                    </td>
                    <td>
                    {{$user->alter}}
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Washing
                    </td>
                    <td>
                    {{$user->washing}}
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Sewing
                    </td>
                    <td>
                    {{$user->sewing}}
                    </td>
                    
                </tr>
                
                <tr>
                    <td>
                        Finishing
                    </td>
                    <td>
                    {{$user->finishing}}
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Reject
                    </td>
                    <td>
                    {{$user->reject}}
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        Other
                    </td>
                    <td>
                    {{$user->other}}
                    </td>
                    
                </tr>
                

                <tr>
                    <td>Complete Production:</td>
                    <td>{{$user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other }} PCS</td>
                </tr>
                <tr>
                    <td>Total Defect:</td>
                    <td>{{$user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other }} PCS</td>
                </tr>
                <tr>
                    <td>Percentage of Defect:</td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>