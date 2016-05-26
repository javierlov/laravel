@extends('layouts.principal')

@section('title', 'Un apagon')

@section('sidebar')
    @parent

    <div style="border:1px">
    <p>This is appended to the master sidebar.</p>
    </div>

@stop

@section('content')
    <p>This is my body content.</p>
@stop