
{{--
@extends('components.layout')
@section('content')
    <h1>Hello world</h1>
@endsection
--}}
<x-layout>
   <x-flash>
       You are logged out!
   </x-flash>
<br>
    <x-flash type="error">
        You are logged out!
    </x-flash>
<br>
    <x-flash type="warning">
        You are logged out!
    </x-flash>
</x-layout>
