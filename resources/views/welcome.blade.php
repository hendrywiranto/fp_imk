<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TABS TITLE -->
    <title>ASSITS - Home</title>
    @include('elements.header')
</head>
    
<body class="page-index has-hero">
  <div id="background-wrapper" class="metro" data-stellar-background-ratio="0.1">
    <!-- INCLUDE NAVBAR -->
@include('elements.navbar')
    <div id="content">
      <!-- SOME WORDS -->
      <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
          <h2 class="text-shadow-white">
              AssITS is your complete source for your courses information and materials that is easy and quick.
            </h2>
        </div>
      </div>

      <!-- SUBBED CLASSES SECTION -->
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">Subscribed Classes</h2>
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
            @if(session('user.kelas')->isEmpty())
              <div>
                Belum ada kelas yang diambil
              </div>
            @endif
            <!-- CLASSES (Loop here)-->
            @foreach(session('user.kelas') as $kelas)
              <div class="item">
                <a href="#" class="overlay-wrapper">
                    <img src="{{$kelas->class_pic}}" class="img-responsive underlay">
                    <span class="overlay">
                      <span class="overlay-content"> <span class="h4">{{$kelas->class_shortname}}</span> </span>
                    </span>
                  </a>
                <div class="item-details bg-noise">
                  <h4 class="item-title">
                      <a href="#">{{$kelas->class_name}}</a>
                    </h4>
                  <a href="/kelas/{{$kelas->id}}" class="btn btn-more"><i class="fa fa-plus"></i>Open class</a>
                </div>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- INCLUDE FOOTER -->
@include('elements.footer')

  <!-- INCLUDE SCRIPTS -->
@include('elements.script')

</body>
</html>
