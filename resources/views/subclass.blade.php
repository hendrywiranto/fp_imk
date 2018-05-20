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
      <!-- SOME WORDS -->
      <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
          <h2 class="text-shadow-white">
              <strong>AssITS</strong> is your complete source for your courses information and materials that is easy and quick.
            </h2>
        </div>
      </div>
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">Subscribe to a Class</h2>
<!--          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>-->
          
          <div class="item-carousel">
            <!-- ADD CLASSES (Loop here)-->
            @if($kelas->isEmpty())
              <div>
                <i>Kelas sudah terambil semua.</i>
              </div>
            @endif
            @foreach($kelas as $kelas)
              <div style="margin: 10px 0 10px 0" align="center" class="col-lg-3">
                <a href="/subkelas/{{$kelas->id}}" class="overlay-wrapper">
                    <img src="{{$kelas->class_pic}}" class="img-responsive underlay">
                    <span class="overlay">
                        <span class="overlay-content"> <span class="h4">{{$kelas->class_shortname}}</span> </span>
                    </span>
                  </a>
                <div class="item-details bg-noise">
                  <h4 class="item-title">
                      <a href="#">{{$kelas->class_name}}</a>
                    </h4>
                  <a href="/subkelas/{{$kelas->id}}" class="btn btn-more"><i class="fa fa-plus"></i>Add Class</a>
                </div>
              </div>
            @endforeach
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
