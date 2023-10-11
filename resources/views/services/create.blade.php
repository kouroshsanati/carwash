<form action="{{ route('services.store') }}" method="post">
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
</form>

