@extends('layout.layoutSite')

@section('title')
	{{ 'MEDOL - Medical Online Services' }}
@endsection

@section('slider')
	@include('sections.slider')
@endsection

@section('content')
	@include('sections.product')
	@include('sections.service')
	@include('sections.company')
	@include('sections.news')
	@include('sections.partner')
@endsection