<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category Count</title>

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
    <h1>Edit Category</h1>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <label>Select Division :</label>
        <select name="division_id" id="division">
            @foreach($divisions as $division)
                <option value="{{ $division->division_id }}" {{ $division->division_id == $category->division_id ? 'selected' : '' }}>
                    {{ $division->division_name }}
                </option>
            @endforeach
        </select><br><br>

        <label>Student Type (Special or General): </label><br>
        <label>Special</label>
        <input type="radio" name="type" value="Special" {{ $category->type == 'Special' ? 'checked' : '' }}>
        <label>General</label>
        <input type="radio" name="type" value="General" {{ $category->type == 'General' ? 'checked' : '' }}><br><br>

        <label>No.of Students </label>
        <input type="text" name="count" value="{{ $category->count }}" placeholder="Enter Student Count"><br><br>

        <input type="submit" value="Update">
        <a href="{{ url('category.create') }}">Cancel</a>
    </form>
</body>
</html>
