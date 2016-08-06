@extends('layouts.app')

@section('content')
<div class="container">
   <form role="form" method="POST" action='addNewClass'>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="className">Name of the Class</label>
        <input type="text" class="form-control" id="className" name="className">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection
