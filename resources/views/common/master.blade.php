@extends('common.basicLibraries')
@section('body')
	@include('common.header')
	<div id="wrapper">
	@yield('content')
	</div>
	@include('common.footer')
@stop