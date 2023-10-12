{{--<form action="{{ route('services.store') }}" method="post">
    @csrf
    name
    <input type="text" name="name">
    phone
    <input type="text" name="phone">
    <select name="service">

        @foreach($services as $key => $service)
            <option value="{{ $key }}">{{ $service['name'] }} with {{ $service['time'] }} minutes
                by {{ $service['price'] }} toman
            </option>
        @endforeach

    </select>
    <input type="submit">
</form>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Form</title>
    <link href="{{ asset('../css/create.css') }}" rel="stylesheet">


</head>
<body>
<table>
    <form action="{{ route('services.store') }}" method="post">
        @csrf
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Service</td>
            <td>
                <select name="service">
                    @foreach($services as $key => $service)
                        <option value="{{ $key }}">{{ $service['name'] }} with {{ $service['time'] }} minutes by {{ $service['price'] }} toman</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Submit</button></td>
        </tr>
    </form>
</table>
</body>
</html>


