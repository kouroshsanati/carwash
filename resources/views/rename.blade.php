{{--<form action="{{ route('service.edit') }}" method="post">
    @csrf
    phone
    <input type="text" name="phone">
    code
    <input type="text" name="code">
    <input type="submit" name="submit">

</form>--}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="{{ asset('../css/rename.css') }}" rel="stylesheet">

</head>
<body>
<div class="form-container">
    <form action="{{ route('service.edit') }}" method="post">
        @csrf
        <label for="phone">Phone:</label>
        <input type="text" name="phone">
        <label for="code">Code:</label>
        <input type="text" name="code">
        <button type="submit" name="submit">Submit</button>
    </form>
</div>
</body>
</html>


