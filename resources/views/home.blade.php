@extends('layouts.app')

@section('content')
    <example-component v-bind:id="{{ Auth::user()->id }}"></example-component>
@endsection
