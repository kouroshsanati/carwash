<form action="{{ route('service.edit') }}" method="post">
    @csrf
    phone
    <input type="text" name="phone">
    code
    <input type="text" name="code">
    <input type="submit" name="submit">

</form>


