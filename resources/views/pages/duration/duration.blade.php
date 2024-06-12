<!DOCTYPE html>
@extends('layouts.mainlayout')
@section('title','duration')
@section('content')

<div class="container">
  <div class="row">
    <div class="container bpu-container">
      <h1> duration Details</h1>
      <div class="row">
        <div class="col-md-12 text-left">
          <form action="{{config('custom.app.root')}}/saveduration" method="POST">
            {{csrf_field()}}
            <div class="form-group">
            <input type="text" class="form-control" name="durationname" placeholder="Enter the Duration Name Here">
    </div>
    <input type="text" class="form-control" name="durationnames" placeholder="කාල සීමාවේ නම මෙහි ඇතුලත් කරන්න">
            <br>
            <input type="submit" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">
            <br> <br>
          </form>
          <table class="table table-dark" style="width:100%;">
            <th>ID</th>
            <th>duration NAME</th>
            <th>කාල සීමාවේ නම</th>
            <th>IS ACTIVE</th>
            @foreach( $data as $duration)
            <tr>
              <td> {{$duration->id}} </td>
              <td> {{$duration->name}} </td>
              <td>  {{$duration->names}} </td>
              {{-- <td> {{$duration->IsActive == 1? 'Active' : 'Inactive'}} </td> --}}
              <td>
                {{csrf_field()}}
                <a href="{{config('custom.app.root')}}/deleteduration/{{$duration->id}}" class="btn btn-danger">Delete</a>
                <a href="{{config('custom.app.root')}}/updateduration/{{$duration->id}}" class="btn btn-warning">Update</a>
              </td>
            </tr>
            @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
