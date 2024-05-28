<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Division Update </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <style>
        body {
          background-color: rgb(209, 244, 255);
        }

        .frame {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-top: 50px; /* Adjust as needed */
        }

        .center-buttons {
            text-align: center;
        }

        
      </style>

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
