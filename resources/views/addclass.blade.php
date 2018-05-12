<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TABS TITLE -->
    <title>ASSITS - Add Class</title>
    @include('elements.header')
</head>

<body class="page-index has-hero">
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.1">

  <!-- INCLUDE NAVBAR -->
@include('elements.navbar')

    <div id="content">
      <div class="showcase block block-border-bottom-grey">
        <div class="container">
          <h2 class="block-title">Subscribe to a class</h2>
          <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>

            <!-- ADD CLASSES (Loop here)-->
            <div class="item">
              <a href="#" class="overlay-wrapper">
                  <img src="[CLASS IMAGE]" class="img-responsive underlay">
                  <span class="overlay">
                    <span class="overlay-content"> <span class="h4">[CLASS TITLE]</span> </span>
                  </span>
                </a>
              <div class="item-details bg-noise">
                <h4 class="item-title">
                    <a href="#">[SHORTEN CLASS TITLE]</a>
                  </h4>
                <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Add class</a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /content -->
  
  <!-- INCLUDE FOOTER -->
@include('elements.footer')

  <!-- INCLUDE SCRIPTS -->
@include('elements.script')

</body>

</html>
