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
        <div class="col-md-10 col-md-push-2">
          <div class="page-header">
            <h1>
                {{$kelas->class_name}}
            </h1>
          <small>{{$kelas->class_lecturer}}</small>
          </div>
          <div class="block">
            @if(session('message.1'))
            <div class="alert alert-success alert-dismissible"">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>{{session('message.1')}}</strong> {{session('message.2')}}
            </div>
            @endif
            <h3 class="block-title">
                Lecturer Info
            </h3>
            <!-- IF EMPTY SHOW -->
            @foreach($kelas->pertemuan as $pertemuan)
              <?php 
                $datenow = \Carbon\Carbon::now(7);
                $flag = !$datenow->gt($pertemuan->datetime);
              ?>
              @if($flag)
                <div class="block-highlight block-pd-h block-pd-sm col-md-6">
                  <div><b>Course {{$pertemuan->urut}}</b></div>
                  <div>Date&nbsp;&nbsp;&nbsp;&nbsp;: {{$pertemuan->datetime}}</div>
                  <div>State&nbsp;&nbsp;&nbsp;:<strong>
                    @if($pertemuan->batal==0) 
                      Available
                    @else
                      Canceled
                    @endif
                  </strong> </div>
                  @if($pertemuan->keterangan!=NULL)
                      <div>Info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$pertemuan->keterangan}}</div>
                  @else
                      <div>Info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: -</div>
                  @endif
                  @if($pertemuan->batal==0)
                    <a href="/batal/{{$pertemuan->id}}" type="button" class="btn btn-sm btn-danger">Cancel</a>
                  @else
                    <a href="/hadir/{{$pertemuan->id}}" type="button" class="btn btn-sm btn-success">Available</a>
                  @endif
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#presence-{{$pertemuan->id}}">Add Information</button>
                  <a href="/deleteinfo/{{$pertemuan->id}}" class="btn btn-primary btn-sm">Delete Information</a>
                  <!-- Modal -->
                  <div class="modal fade" id="presence-{{$pertemuan->id}}" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <form action="/info/{{$pertemuan->id}}" method="GET">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Presence Information</h4>
                          </div>
                          <div class="modal-body">
                            <div class="input-group input-group-lg">
                              <span class="input-group-addon"><i class="fa fa-fw fa-arrow-right"></i></span>
                              <input type="text" class="form-control" placeholder="Write here" name="info">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="save" value="Save"> 
                          </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>
          <div class="block">
            <h3 class="block-title">
                Materials
              </h3>
            <div class="row">
            @foreach($kelas->pertemuan as $pertemuan)
              <div class="col-lg-4">
                <div style="height:320px" class="stat"> 
                  <small style="margin-bottom: 10px;" class="text-left" ><strong>Course {{$pertemuan->urut}}</strong></small>
                  <div class="row" style="padding:1px">
{{--                     <small>Video &emsp;&nbsp;&nbsp;: <a class="btn btn-sm btn-primary" href="[MATERIAL VIDEO LINK]">View</a> <a class="btn btn-sm btn-primary" href="[REUPLOAD LINK]">Reupload</a></small> --}}
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <input type="hidden" name="class_id" class="form-control" value="{{$kelas->id}}">
                        <input type="hidden" name="pertemuan_id" class="form-control" value="{{$pertemuan->id}}">
                        <div class="form-group col-md-12">
                          <div class=""><small>Material Name</small></div>
                          <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                          <input type="file" name="fileToUpload" class="btn form-control" required>
                        </div>
                        <div class="form-group col-md-12">
                          <input type="submit" value="Upload File" name="submit" class="btn btn-primary btn-block">
                        </div>
                    </form>
                  </div>
                  <div class="row" style="padding:1px">
                  <small>Materials :</small>
                  @foreach($pertemuan->materi as $materi)
                    <small><a href="{{$materi->path}}">{{$materi->name}}</a></small>
                  @endforeach   
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        
        <div class="col-md-2 col-md-pull-10 sidebar visible-md-block visible-lg-block">
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
