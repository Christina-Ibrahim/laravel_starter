@extends('layout.master')

@section('content')

<h1> About page</h1>






@forelse($data as $_data)
<p> {{$_data}} </p>
@empty
<p>empty array </p>
@endforelse


@stop
