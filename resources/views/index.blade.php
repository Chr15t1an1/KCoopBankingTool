@extends('layout')
@section('content')
<div class="row">
  <div class="container">
    <h1>Process Coop Reports into the CSV's the NMLS Demand</h1>
    <form class="form-horizontal" method="post" action="process" enctype="multipart/form-data" >
      {{ csrf_field() }}
      <fieldset>

        <!-- Form Name -->
        <legend>Upload the excell file from the coop</legend>
        <!-- File Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">File Button</label>
          <div class="col-md-4">
            <input type="file" name="fileToUpload" id="fileToUpload" class="input-file" >
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
          <div class="col-md-4">
            <button type="submit" name="submit" name="singlebutton" class="btn btn-primary">Button</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection
