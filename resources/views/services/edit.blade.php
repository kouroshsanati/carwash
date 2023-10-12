{{--<form action="{{ route('services.update',$service) }}" method="post">
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
</form>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="{{ asset('../css/edit.css') }}" rel="stylesheet">

</head>
<body>
<div class="form-container">
    <form action="{{ route('services.update', $service) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $service->name }}">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ $service->phone }}">
        <label for="service">Service:</label>
        <select name="service">
            @foreach($services as $key => $Service)
                <option value="{{ $key }}">{{ $Service['name'] }} with {{ $Service['time'] }} minutes by {{ $Service['price'] }} toman </option>
            @endforeach
        </select>
        <div class="button-container">
            <button type="submit">Edit</button>

        </div>
    </form>
    <form action="{{ route('services.destroy', $service) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
</div>
</body>
</html>

