
@if (session('success'))
    {{ session('success') }}
    @php
        $service = \App\Models\Service::query()->where('code', session('success'));
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

{{--
<style>
    /* Set the background color to blue */
    body {
        background-color: #007BFF;
    }

    /* Style the table */
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #E0E0E0; /* Alternate row background color */
    }

    /* Style the table headers */
    .table-striped thead th {
        background-color: #343A40; /* Header background color */
        color: white; /* Header text color */
    }
</style>

@if (session('success'))
    {{ session('success') }}
    @php
        $service = \App\Models\Service::query()->where('code', session('success'));
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

<div class="text-center">
    <div class="button-container">
        <a href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
    </div>
    <div class="button-container">
        <a href="{{ route('rename') }}" class="btn btn-info">Edit Service</a>
    </div>
</div>
--}}

