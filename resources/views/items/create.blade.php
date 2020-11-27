@extends('layouts.app')
@section('content')
<div class="wrapper create-item">
    <h1> Create a New Item</h1>
    <form action="/items" method="post" action="/items">
     @csrf
        <label for="name"> Product Name: </label>
        <input type="text" id="name" name="name">
        <label for="type"> Category: </label>
        <input type="text" id="type" name="type">
        <label for="color"> Choose Item Colors: </label>
        <select name="color" id="color">
            <option value="red"> Red</option>
            <option value="blue"> Blue</option>
        </select>
        <input type="submit" value="Order Item">
</div>
<p class="msg"> {{session ('msg')}}</p>
@endsection
