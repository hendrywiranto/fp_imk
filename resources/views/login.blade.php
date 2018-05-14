<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- PAGE TABS TITLE -->
  <title>ASSITS - Login</title>
  <!-- HEADER -->
  <link rel="import" href="elements/head.html">
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
                  AssITS Login
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
                  
                  <input type="submit" class="form-control">
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
  <link rel="import" href="elements/script.html">

</body>

</html>
