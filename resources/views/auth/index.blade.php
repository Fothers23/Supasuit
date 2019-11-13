@extends('layouts.master')
@section('title')
    <title>Cosplayers</title>
    
@endsection

@section('header')
    <div class="col-3" style="margin-bottom:20px">
        <h1>Cosplayers</h1>
    </div>
@endsection

@section('content')
<div class="row">
    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profile</th>
        </tr>
        @foreach (user in users)
        <tr>
            <td>{{ user->name }}</td>
            <td>{{ user->email }}</td>
            <td> </td>
        </tr>
    </table>
</div>
@endsection


