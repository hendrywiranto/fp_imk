<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TABS TITLE -->
    <title>ASSITS - Add Class</title>
    @include('layout.header')
</head>

<body class="page-index has-hero">
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.1">

  <!-- INCLUDE NAVBAR -->
  @include('layout.navbar')

  <div id="content">
    <div class="container" id="about">
      <div class="row">
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
                {{$kelas->class_name}}
                <small>{{$kelas->class_lecturer}}</small>
            </h1>
          </div>
          <div class="block-highlight block-pd-h block-pd-sm">
            <h3 class="block-title">
                Lecturer Info
            </h3>
            <p class="text-fancy">[LECTURER PRESENCE INFO]</p>
            <!-- IF EMPTY SHOW -->
            <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#presence">Add Information</button>
            <!-- Modal -->
            <div class="modal fade" id="presence" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Presence Information</h4>
                  </div>
                  <div class="modal-body">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-arrow-right"></i></span>
                      <input type="text" class="form-control" placeholder="Write here">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <a class="btn btn-primary">Save</a>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
          <div class="block">
            <h3 class="block-title">
                Materials
              </h3>
            <div class="row">

              <div class="col-md-4">
                <div class="stat"> 
                  <small><strong>Course [COURSE NUM]</strong></small>
                  <small>Materials : <a class="btn btn-sm btn-primary" href="[MATERIAL LINK]">View</a> <a class="btn btn-sm btn-primary" href="[REUPLOAD LINK]">Reupload</a> </small>
                  <small>Video &emsp;&nbsp;&nbsp;: <a class="btn btn-sm btn-primary" href="[MATERIAL VIDEO LINK]">View</a> <a class="btn btn-sm btn-primary" href="[REUPLOAD LINK]">Reupload</a></small>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="#" class="first">
                  About
                  <small>Class Info</small>
                </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>
  <!-- /content -->
  
  <!-- INCLUDE FOOTER -->
  @include('layout.footer')

  <!-- INCLUDE SCRIPTS -->
  @include('layout.script')

</body>

</html>
