<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Division Page</title>

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
    <div class="container" id="content">    
        <div class="container">
        <div class="row">
          <div class="container bpu-container">
    <h1>ACCIMT Division Details📚</h1>
    <br><br><br>
    <h3>Add Trainee Category</h3>
    <button><a href="{{route('category.create')}}">ADD Training Student</a></button><br><br><br>
    <form action="{{route('division.adddivision')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1" ><b>Division Name</b></label>
        <input type="text" name="division_name" placeholder="Enter Division Name: ">

        <input type="submit" class="btn btn-primary" value="SAVE">
                  <input type="button" class="btn btn-warning" value="CLEAR">
        </div>

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
          </div>
        </div>
        </div>
    </div>

</body>
</html>
