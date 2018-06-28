@extends('layouts.master')
@section('content')
<div class="container">
@if($error)
<div class="alert alert-danger">
	{{$error}}
</div>
</div>
@endif

@endsection