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
    <form action="/addkelas" method="POST">
      {!! csrf_field() !!}
      <div class="form-group">
        <label for="exampleInputEmail1">Class name</label>
        <input type="text" name="name" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class short name</label>
        <input type="text" name="shortname" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class lecturer</label>
        <input type="text" name="lecturer" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class picture</label>
        <input type="text" name="pic" class="form-control" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Class prologue</label>
        <input type="text" name="prologue" class="form-control" >
      </div>
        <input type="submit" name="submit" class="btn btn-primary">
      </div>
    </form>
  </div>
  <!-- /content -->
  
  <!-- INCLUDE FOOTER -->
@include('elements.footer')

  <!-- INCLUDE SCRIPTS -->
@include('elements.script')

</body>

</html>
