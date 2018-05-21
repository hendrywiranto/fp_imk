<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TABS TITLE -->
    <title>ASSITS - Class</title>
    @include('layout.header')
</head>
    
<body class="page-index has-hero">
  <div id="background-wrapper" class="metro" data-stellar-background-ratio="0.1">
    <!-- INCLUDE NAVBAR -->
    @include('layout.navbar')
    <div id="content">
    
    <div class="container" id="about">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
                {{$kelas->class_name}}
            </h1>  
          <small>{{$kelas->class_lecturer}}</small>
          </div> 
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
                Prologue
              </h3>
            <img style="width:320px; height:160px" src="{{$kelas->class_pic}}"  alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p style="text-align:justify">{{$kelas->class_prologue}}</p>
          </div>
          <div class="block-highlight block-pd-h block-pd-sm">
            <h3 class="block-title">
                Lecturer Info
              </h3>
            {{-- <p class="text-fancy">Mon, April 9th 2018:&emsp;Lecturer will attend the class on time.</p> --}}
            <p class="text-fancy">{{$pert->datetime}}&emsp;
              @if($pert->batal==1) Canceled
                @if($pert->keterangan!=NULL) - {{$pert->keterangan}}
                @endif
            @else Lecturer will attend the class on time.
          @endif</p>
          </div>
          <div class="block">
            <h3 class="block-title">
                Materials
              </h3>
            <div class="row">
            <?php $flag=0;?>
            @foreach($kelas->pertemuan as $pertemuan)
              @if($pertemuan->materi->isNotEmpty())
                <?php $flag=1;?>
                <div class="col-md-4">
                  <div class="stat"> 
                    <small><strong>Course {{$pertemuan->urut}} Materials :</strong></small>
                    @foreach($pertemuan->materi as $materi)
                      <small><a href="{{$materi->path}}">{{$materi->name}}</a></small>
                    @endforeach   
  {{--                   <small>Video : <a href="https://garuk.in/vidtaj1">Record {{$kelas->class_shortname}} {{$pertemuan->urut}}</a></small> --}}
                  </div>
                </div>
              @endif
            @endforeach
            @if($flag==0)
              <div class="row">               
                <p style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>No materials uploaded</i></p>
              </div> 
            @endif
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="#" class="first" style="cursor: default;">
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
  <!-- INCLUDE FOOTER -->
@include('layout.footer')

  <!-- INCLUDE SCRIPTS -->
@include('layout.script')

</body>
</html>
