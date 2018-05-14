<!DOCTYPE html>
<html lang="en">

<head>
  <!-- PAGE TABS TITLE -->
  <title>ASSITS - Login</title>
  <!-- HEADER -->
  @include('layout.header')
</head>

<body class="fullscreen-centered page-login">
  <!-- BACKGROUND -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">
    <div id="content">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                  <b>AssITS</b> Login
                </h3>
            </div>
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" action="/login" method="POST">
                {!! csrf_field() !!}
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                  </div>
                  
                  <input type="submit" class="btn btn-lg btn-default btn-block" value="Login">
{{--                   <a class="btn btn-lg btn-primary btn-block" href="index.html">LOGIN</a>
                  <a class="btn btn-lg btn-primary btn-block" href="admin.html">ADMIN</a> --}}
                  
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  @include('layout.script')
</body>
</html>