<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Division Update </title>
</head>
<body>
    <H1>Update the Divisions </H1>
    <br><br><br>
    <form action="{{route('division.update', $division->division_id)}}" method="post">
        @csrf

        <label ><b>Division Name</b></label>
        <input type="text" name="division_name" value="{{$division->division_name}}" placeholder="Enter Division Name: "">

        <input type="submit" value="Submit">
        <input type="reset" value="Cleare">

    </form>

</body>
</html>
