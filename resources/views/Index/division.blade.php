<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Division Page</title>
</head>
<body>
    <H1>ACCIMT Division</H1>
    <br><br><br>
    <h3>Add Trainee Student</h3>
    <button><a href="{{route('category.create')}}">ADD Training Student</a></button><br><br><br>
    <form action="{{route('division.adddivision')}}" method="post">
        @csrf
        <label ><b>Division Name</b></label>
        <input type="text" name="division_name" placeholder="Enter Division Name: ">

        <input type="submit" value="Submit">
        <input type="reset" value="Cleare">

    </form>


    <br><br><br>

    <h2>Divisions in ACCIMT</h2>
    <br>
    <div class="">
        <table border="1" cellspacing="4" cellpadding="5">
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
                        <button type="submit">Update</button>
                    </form>

                </td>
                <td>
                    <form action="{{ route('division.destroy', $division->division_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>


            </tr>

             @endforeach

        </table>
    </div>

</body>
</html>
