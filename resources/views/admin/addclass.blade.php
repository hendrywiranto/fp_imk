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
    <div class="container">
    <h2 class="block-title">Add Classes</h2>
    <form action="/addkelas" method="POST">
      {!! csrf_field() !!}
      <div class="form-group">
        <label for="exampleInputEmail1">Class Name</label>
        <input type="text" name="name" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class Short Name</label>
        <input type="text" name="shortname" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class Lecturer</label>
        <input type="text" name="lecturer" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class Picture</label>
        <input type="text" name="pic" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class Prologue</label>
        <input type="text" name="prologue" class="form-control" >
      </div>
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Add Class">
    </form>
    </div>
  </div>
  <!-- /content -->
  
  <!-- INCLUDE FOOTER -->
@include('layout.footer')

  <!-- INCLUDE SCRIPTS -->
@include('layout.script')

</body>

</html>
