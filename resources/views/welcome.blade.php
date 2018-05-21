<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TABS TITLE -->
    <title>ASSITS - Home</title>
    @include('layout.header')
</head>
    
<body class="page-index has-hero">
  <div id="background-wrapper" class="metro" data-stellar-background-ratio="0.1">
    <!-- INCLUDE NAVBAR -->
    @include('layout.navbar')
    @if(session('user.role')=='siswa')
    
    <div id="content">
      <!-- SOME WORDS -->
      <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
          <h2 class="text-shadow-white">
              <strong>AssITS</strong> is your complete source for your courses information and materials that is easy and quick.
            </h2>
        </div>
      </div>

      <!-- SUBBED CLASSES SECTION -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">Enrolled Classes</h2>
<!--          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>-->
          
          <div class="item-carousel">
            @if(session('user.kelas')->isEmpty())
              <div>
                Belum ada kelas yang diambil
              </div>
            @endif
            <!-- CLASSES (Loop here)-->
            @foreach(session('user.kelas') as $kelas)
               <div style="margin: 10px 0 10px 0" align="center" class="col-lg-3">
                <a href="/kelas/{{$kelas->id}}" class="overlay-wrapper">
                    <img style="width:320px; height:160px" src="{{$kelas->class_pic}}" class="img-responsive underlay">
                    <span class="overlay">
                      <span class="overlay-content"> <span class="h4">{{$kelas->class_shortname}}</span> </span>
                    </span>
                  </a>
                <div class="item-details bg-noise">
                  <h4 class="item-title">
                      <h5>{{$kelas->class_name}}</h5>
                    </h4>
                  <a href="/kelas/{{$kelas->id}}" class="btn btn-more"><i class="fa fa-plus"></i>Open Class</a>
                </div>
            </div>
              
            @endforeach
              
          </div>
        </div>
      </div>
    </div>
  </div>

@elseif(session('user.role')=='dosen')

  <div id="content">
    
    <div class="showcase block block-border-bottom-grey">
      <div class="container">
        <h2 class="block-title">Manage Classes</h2>
<!--        <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>-->
        <div class="item-carousel">

          <!-- CLASS MANAGEMENT (Loop Here) -->
          @foreach($kelas as $kelas)
            <div style="margin: 10px 0 10px 0" align="center" class="col-lg-3 col-md-4 col-sm-6">
              <a href="/detailkelas/{{$kelas->id}}" class="overlay-wrapper">
                  <img style="width:320px; height:160px" src="{{$kelas->class_pic}}" class="img-responsive underlay">
                  <span class="overlay">
                    <span class="overlay-content"> <span class="h4">{{$kelas->class_shortname}}</span> </span>
                  </span>
                </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                    <h5>{{$kelas->class_name}}</h5>
                  </h4>
                <a href="/detailkelas/{{$kelas->id}}" class="btn btn-more"><i class="fa fa-plus"></i>Edit Class</a>
              </div>
            </div>
          @endforeach
          </div>
          </div>
        </div>
      </div>
@endif

    <!-- INCLUDE FOOTER -->
    @include('layout.footer')

    <!-- INCLUDE SCRIPTS -->
    @include('layout.script')

</body>
</html>