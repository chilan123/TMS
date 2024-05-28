<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type page</title>

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
    <h1>Add Trainee Students</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label>Select Division :</label>

        <select name="division_id" id="division">

            @foreach($divisions as $division)
                    <option value="{{ $division->division_id }}" name="division_id">{{ $division->division_name }}</option>
            @endforeach
        </select><br><br>

        <label>Student Type (Special or General ): </label><br>
        <label>Special</label>
        <input type="radio" name="type" value="Special" id="spe">

        <label>General</label>
        <input type="radio" name="type" value="General" id="gen"><br><br>

        <label>No.of Students </label>
        <input type="text" name="count" placeholder="Enter Student Count"><br><br>
        <input type="submit" value="save"> &nbsp;&nbsp;&nbsp;
        <input type="reset" value="Clear">

    </form>

    <h1>Trainee Student Details (Special or General)</h1>
    <br><br>
    <div class="">
        <table border="1" cellspacing="4" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Division ID</th>
                <th>Division Name</th>
                <th>Type (Special-1 or general-2)</th>
                <th>No Of Student</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach ($categories as $categorie)
            <tr>
                <td>{{$categorie->id}}</td>
                <td>{{$categorie->division_id}}</td>
                <td>
                    @foreach($divisions as $division)
                            @if($division->division_id == $categorie->division_id)
                                {{ $division->division_name }}
                            @endif
                        @endforeach
                </td>
                     {{-- <td>{{ optional($categorie->division)->Division_name }}</td> --}}
                <td>{{$categorie->type}}</td>
                <td>{{$categorie->count}}</td>

                <td>
                    {{-- <form action="{{route('category.editpage', $categorie->id)}}" method="POST">
                        @csrf

                        <button type="submit">Update</button>
                    </form> --}}
                    <a href="{{ route('category.editpage', $categorie->id) }}">Update</a>

                </td>
                <td>
                    <form action="{{ route('category.destroy', $categorie->id) }}" method="POST">
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
