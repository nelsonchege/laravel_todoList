@extends('layouts')

@section('content')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Id</label>
      <input type="id" class="form-control" id="id" name="id" value={{ $listItem->id }} aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input  type="text" class="form-control" id="name" name="name" value={{ $listItem->name }} aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">IS Complete</label>
        <input type="id" class="form-control" id="is_complete" name="is_complete" value={{ $listItem->is_complete }} aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection