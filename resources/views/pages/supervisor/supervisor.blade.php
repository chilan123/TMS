<!DOCTYPE html>
@extends('layouts.mainlayout')
@section('title', 'Supervisor')  @section('content')

<div class="container">
  <div class="row">
    <div class="container bpu-container">
      <h1> Supervisor Details</h1>

      <div class="row">
        <div class="col-md-12 text-left">
          <form action="{{config('custom.app.root')}}/savesupervisor" method="POST">  {{csrf_field()}}
            <div class="form-group">
              <input type="text" class="form-control" name="supervisorname" placeholder="Enter the supervisor Name Here">
            </div>
            <input type="text" class="form-control" name="supervisornames" placeholder="අංශ පාලක නම මෙහි ඇතුලත් කරන්න">  <br>
            <input type="submit" class="btn btn-primary" value="SAVE">
            <input type="button" class="btn btn-warning" value="CLEAR">
            <br><br>
          </form>

          <table class="table table-dark" style="width:100%;">
            <th>ID</th>
            <th>SUPERVISOR NAME</th>  <th>සුපරීක්ෂක නම</th>  <th>IS ACTIVE</th>
            @foreach( $data as $supervisor)  <tr>
              <td> {{$supervisor->id}} </td>
              <td> {{$supervisor->name}} </td>  <td>  {{$supervisor->names}} </td>
              <td> {{$supervisor->IsActive == 1? 'Active' : 'Inactive'}} </td>
              <td>
                {{csrf_field()}}
                <a href="{{config('custom.app.root')}}/deletesupervisor/{{$supervisor->id}}" class="btn btn-danger">Delete</a>  <a href="{{config('custom.app.root')}}/updatesupervisor/{{$supervisor->id}}" class="btn btn-warning">Update</a>  </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
