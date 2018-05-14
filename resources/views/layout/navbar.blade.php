    <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-md-3">
              <h3>
              	Classes
              </h3>
              <!--LOOP HERE-->
              <p>[CLASS NOTIFICATION]</p>
            
            </div>
            <div class="col-md-3">
              <h3>
              	Tasks
              </h3>
              <!--LOOP HERE-->
			        <p>[TASK NOTIFICATION]</p>
            
            </div>
          </div>
      	</div>
    </div>
    <div id="navigation" class="wrapper">
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-6">
              <a href="/" title="Home">
                <h1>
                  AssITS
                </h1>
              </a>
            </div>
            <!--header rightside-->
            <div class="col-md-6">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <li>{{session('user.name')}} 
                @if(session('user.role')=='dosen')
                    -&ensp;<i>Administrator</i>
                @elseif(session('user.role')=='siswa')
                    -&ensp;<i>{{session('user.nrp')}}</i>
                @endif
                </li>
                <!--LOGOUT BUTTON-->
                <li><a href="/logout" class="btn btn-default text-uppercase"><i class="fa fa-sign-in text-primary"></i>&ensp;Logout</a></li> 
                <!--NOTIFICATION DROPDOWN TRIGGER-->
                @if(session('user.role')=='siswa')
                <li><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="/"><i class="fa fa-home"></i></a>
              </li>
            </ul>
            <ul class="nav navbar-nav" id="main-menu">
            @if(session('user.role')=='siswa')
              <li class="icon-link">
                <a href="/subkelas"><i class="fa fa-plus"></i>&ensp;Subscribe Class</a>
              </li>
            @else
              <li class="icon-link">
                <a href="/addkelas"><i class="fa fa-plus"></i>&ensp;Add Class</a>
              </li>
            @endif
            </ul>
          </div>
          
        </div>
      </div>
    </div>  
  </div>