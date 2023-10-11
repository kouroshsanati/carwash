<form action="{{ route('services.update',$service) }}" method="post">
    @csrf
    @method('PATCH')
    name
    <input type="text" name="name" value="{{ $service->name}}">
    phone
    <input type="text" name="phone" value="{{ $service->phone }}">


    <select name="service">
        @foreach($services as $key => $Service)
            <option value="{{ $key }}">{{ $Service['name'] }} with {{ $Service['time'] }} minutes
                by {{ $Service['price'] }} toman </option>
        @endforeach
    </select>

    <input type="submit" value="edit">
</form>
<form action="{{ route('services.destroy',$service) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete">
</form>

{{--    <!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #3498db;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        form {
            display: table;
            width: 100%;
        }

        label, input, select {
            display: table-row;
            margin: 10px 0;
            width: 100%;
        }

        input[type="text"], select {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        select {
            background-color: #fff;
            color: #000;
        }

        input[type="submit"] {
            background-color: #2980b9;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #1c6ca1;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="{{ route('services.update', $service) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $service->name }}">

        <label for="phone">Phone</label>
        <input type="text" name="phone" value="{{ $service->phone }}">

        <label for="service">Select Service</label>
        <select name="service">
            @foreach($services as $key => $Service)
                <option value="{{ $key }}">{{ $Service['name'] }} with {{ $Service['time'] }} minutes by {{ $Service['price'] }} toman</option>
            @endforeach
        </select>

        <input type="submit" value="Edit">
    </form>

    <form action="{{ route('services.destroy', $service) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
</div>
</body>
</html>--}}
{{--
    <!DOCTYPE html>
<html>
<head>
    <style>
        /* Styling for the form */
        form {
            background-color: #3498db; /* Blue background color */
            padding: 20px;
            width: 600px;
            margin: 0 auto;
            border-radius: 10px;
        }

        /* Styling for the submit button */
        input[type="submit"] {
            background-color: #4CAF50; /* Green button background color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Style for text input fields */
        input[type="text"] {
            width: 96%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
        }

        /* Style for select dropdown */
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<form action="{{ route('services.update', $service) }}" method="post">
    @csrf
    @method('PATCH')
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $service->name }}" id="name">
    <label for="phone">Phone</label>
    <input type="text" name="phone" value="{{ $service->phone }}" id="phone">
    <label for="service">Service</label>
    <select name="service" id="service">
        @foreach($services as $key => $service)
            <option value="{{ $key }}">{{ $service['name'] }} with {{ $service['time'] }} minutes by {{ $service['price'] }} toman</option>
        @endforeach
    </select>
    <input type="submit" value="Edit">
</form>
<form action="{{ route('services.destroy', $service) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
</body>
</html>--}}

