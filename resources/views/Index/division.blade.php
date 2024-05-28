<!DOCTYPE html>
@extends('layouts.mainlayout')
@section('title','Division')
@section('content')
    <div class="container" id="content">    
    <div class="container">
    <div class="row">
    <div class="container bpu-container">
    <h1>ACCIMT Division Details📚</h1>
    <br><br><br>
    <h3>Add Trainee Category</h3>
    <button type="submit" class="btn btn-success"><a href="{{route('category.create')}}" class="form-control">ADD Training Student</a></button><br><br><br>
    <form action="{{route('division.adddivision')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1" ><b>Division Name</b></label>
        <input type="text" name="division_name" class="form-control" placeholder="Enter Division Name: ">
        </div>
        
        <input type="submit" class="btn btn-primary" value="SAVE">
        <input type="button" class="btn btn-warning" value="CLEAR">
    </form>


    <br><br><br>

    <h2 align="center">Divisions in ACCIMT</h2>
    <br>
    <div class="">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>Division Name</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($divisiones as $division)
            <tr>
                <td>{{$division->division_id}}</td>
                <td>{{$division->division_name}}</td>

                <td>
                     <form action="{{ route('division.editpage', $division->division_id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>

                </td>
                <td>
                    <form action="{{ route('division.destroy', $division->division_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </td>


            </tr>

             @endforeach

        </table>
    </div>
</div>
</div>
</div>
</div>
@endsectionb 
