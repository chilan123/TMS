@extends('layouts.mainlayout')
@section('title','Update Degreeorcourse')
@section('content')

<div class="container bpu-container">
  <h1 class="pt-5"> Update Degreeorcourse</h1>
  <div class="row">
    <div class="col-md-12 text-left">
      <form method="post" action="{{config('custom.app.root')}}/updatedegdata">
        {{csrf_field()}}
        <div class="form-group">
          <label for="degreeid">Degreeorcourse ID</label>
          <input type="text" class="form-control" id="degreeid" placeholder="Enter Uniorinstitute Name" name="degreeid" value="{{$singleuserdata->id}}" Readonly>
        </div>
        <div class="form-group">
          <label for="degreeid">Uniorinstitute Name</label>
          <select class="form-control formselect required" placeholder="Select Uniorinstitute" id="uniorinstituteSelect" name="uniorinstituteSelect">

            @foreach($task as $tasks)
            <option value="{{$tasks->id}}" {{$singleuserdata->fid == $tasks->id? 'selected' : ''}}>
              {{ ucfirst($tasks->name) }}
            </option>
            @endforeach

          </select>
        </div>
        <div class="form-group">
          <label for="degreename">Degreeorcourse Name</label>
          <input type="text" class="form-control" id="degreename" placeholder="Enter username" name="degreename" value="{{$singleuserdata->dname}}" required>
        </div>
        <div class="form-group">
                            <label for="exampleFormControlInput1">දෙපාර්තමේන්තුවේ නම ඇතුළත් කරන්න</label>
                            <input type="text" class="form-control" id="depnames" name="depnames" placeholder="දෙපාර්තමේන්තුවේ නම " value="{{$singleuserdata->dnames}}" required>
                        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>

@endsection
