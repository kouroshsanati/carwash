{{--@if (session('success'))
    {{ session('success') }}
    @php
        $service = \App\Models\Service::query()->where('code', session('success'))->first();
        $id = $service->service;
    @endphp

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>{{ session('services')[$id]['name'] }}</td>
            <td>{{ session('services')[$id]['price'] }}</td>
            <td>{{ session('services')[$id]['time'] }}</td>
        </tr>
        </tbody>
    </table>
@endif

<a href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
<a href="{{ route('rename') }}" class="btn btn-info">Edit Service</a>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <link href="{{ asset('../css/welcome.css') }}" rel="stylesheet">

</head>
<body>
@if ( session('success'))
    {{ session('success') }}
    @php
        $service = \App\Models\Service::query()->where('code', session('success'))->first();
        $id = $service->service;

    @endphp

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ session('services')[$id]['name'] }}</td>
            <td>{{ session('services')[$id]['price'] }}</td>
            <td>{{ session('services')[$id]['time'] }}</td>
        </tr>
        </tbody>
    </table>
@endif

<a href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
<a href="{{ route('rename') }}" class="btn btn-info">Edit Service</a>
</body>
</html>

