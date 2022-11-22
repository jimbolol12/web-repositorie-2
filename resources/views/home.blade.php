@extends('layouts.main')

@section('content')
<form action="{{ route('processForm') }}" method="POST">
    <label>Merk: </label>
    <input type="text" name="brand"><br>

    <lable>Aantal banden: </lable>
    <input type="number" name="tires"><br>
</form>
@endsection