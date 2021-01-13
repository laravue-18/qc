<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('admin._style')
  @livewireStyles
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{route('home')}}" class="navbar-brand">Q C</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <a href="{{url('logout')}}" class="dropdown-toggle">
                    <span class="hidden-xs">Log Out</span>
                </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-sm-6">
              <div class="box-body no-padding">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Role: </td>
                      <td>
                        @if($user->admin) Administrator @else User @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Company: </td>
                      <td>
                        {{$user->company}}
                      </td>
                    </tr>
                    <tr>
                      <td>Designation: </td>
                      <td>
                        {{$user->designation}}
                      </td>
                    </tr>
                    <tr>
                      <td>Employee ID: </td>
                      <td>
                        {{$user->employee_id}}
                      </td>
                    </tr>
                    <tr>
                      <td>Mobile Number: </td>
                      <td>
                        {{$user->phone}}
                      </td>
                    </tr>
                    <tr>
                      <td>Email: </td>
                      <td>
                        {{$user->email}}
                      </td>
                    </tr>
                    <tr>
                      <td>Buyer: </td>
                      <td>
                        {{$user->buyer}}
                      </td>
                    </tr>
                    <tr>
                      <td>Factory: </td>
                      <td>
                        {{$user->factory}}
                      </td>
                    </tr>
                    <tr>
                      <td>Order Name: </td>
                      <td>
                        {{$user->order}}
                      </td>
                    </tr>
                    <tr>
                      <td>Style: </td>
                      <td>
                        {{$user->style}}
                      </td>
                    </tr>
                    <tr>
                      <td>Comment/Remark: </td>
                      <td>
                        {{$user->comment}}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-sm-6">
              <livewire:counter />
            </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2021 <a href="https://join.skype.com/invite/wpjgQN5RHmxk" target="_blank">Modern Web Expert</a>.</strong><br>  SkypeID: live:.cid.325e7b40026bbaf7 
  </footer>
</div>
<!-- ./wrapper -->

@include('admin._scripts')
@livewireScripts
</body>
</html>
