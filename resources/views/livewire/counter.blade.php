<div class="box-body no-padding">
    <table class="table">
        <tbody>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="pass">
                    Pass
                </button>
                </td>
                <td>
                {{$pass}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="reject">
                    Reject
                </button>
                </td>
                <td>
                {{$reject}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="alter">
                    Alter
                </button>
                </td>
                <td>
                {{$alter}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="washing">
                    Washing
                </button>
                </td>
                <td>
                {{$washing}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="sewing">
                    Sewing
                </button>
                </td>
                <td>
                {{$sewing}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="other1">
                    Other 01
                </button>
                </td>
                <td>
                {{$other1}}
                </td>
            </tr>
            <tr>
                <td>
                <button class="btn btn-app" wire:click="other2">
                    Other 02
                </button>
                </td>
                <td>
                {{$other2}}
                </td>
            </tr>
           
        </tbody>
    </table>
</div>
