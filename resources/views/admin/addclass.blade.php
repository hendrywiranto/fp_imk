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
    <div class="block">
    <div class="container">
    <h2 class="block-title">
        Add Classes
    </h2>
    <form action="/addkelas" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group col-md-9">
        <label>Class Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>
      <div class="form-group col-md-3">
        <label>Class Short Name</label>
        <input type="text" name="shortname" class="form-control" required>
      </div>
      <div class="form-group col-md-9">
        <label>Class Lecturer</label>
        <input type="text" name="lecturer" class="form-control" required>
      </div>
      <div class="form-group col-md-3">
        <label>Class Place</label>
        <input type="text" name="place" class="form-control" required>
      </div>
      <div class="form-group col-md-9">
        <label>Class Prologue</label>
        <textarea name="prologue" cols="40" rows="8" class="form-control" required></textarea>
      </div>
      <div class="form-group col-md-3">
        <label>Class Picture</label>
        <input type="file" name="input_img" id="imageInput" class="form-control-file" accept="image/*" required>
      </div>
      <div class="form-group col-md-3">
        <label>Class Start Date</label>
        <input type="date" name="date"class="form-control" required>
      </div>
      <div class="form-group col-md-3">
        <label>Class Time</label>
        <input type="time" name="time"class="form-control" required>
      </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add Class">
    </form>
        </div></div>
      </div></div>
  <!-- /content -->
  
  <!-- INCLUDE FOOTER -->
@include('layout.footer')

  <!-- INCLUDE SCRIPTS -->
@include('layout.script')

</body>

</html>
