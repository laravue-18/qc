<div class="box">
    <div class="box-header">
        <table class="table text-center">
            <tbody>
                <tr>
                    <td>
                        <button type="button" class="btn btn-block btn-success btn-lg" wire:click="pass">Pass</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning btn-lg" wire:click="alter">Alter</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning btn-lg" wire:click="washing">Washing</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="button" class="btn btn-block btn-info btn-lg" wire:click="sewing">Sewing</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-primary btn-lg" wire:click="finishing">Finishing</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-danger btn-lg" wire:click="reject">Reject</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Checklist</th>
                    <th>Count</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="40%">
                    Pass
                    </td>
                    <td width="30%">
                    {{$user->pass}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->pass/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Alter
                    </td>
                    <td>
                    {{$user->alter}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->alter/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Washing
                    </td>
                    <td>
                    {{$user->washing}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->washing/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Sewing
                    </td>
                    <td>
                    {{$user->sewing}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->sewing/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Finishing
                    </td>
                    <td>
                    {{$user->finishing}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->finishing/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Reject
                    </td>
                    <td>
                    {{$user->reject}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->reject/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Other
                    </td>
                    <td>
                    {{$user->other}}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    {{round($user->other/($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other) * 100, 2)}} %
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        Total
                    </td>
                    <td>
                    {{$user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other }}
                    </td>
                    <td>
                    @if($user->pass + $user->reject + $user->alter + $user->washing + $user->sewing + $user->finishing + $user->other)
                    100 %
                    @endif
                    </td>
                </tr>
            
            </tbody>
        </table>
        <hr>
        <table class="table table-striped">
            <tbody>
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
