<?php $page_title = 'My Domains'; ?>
@extends('layout')

@section('header')
{{$page_title}} <small>Add some extra domains, or edit your existing ones</small>
@stop

@section('content')
@include('register_domain')

{{

    Datatable::table()
    ->addColumn('Domain', 'TLD', 'Edit')
    ->setUrl('domain/list')
    ->render()

}}


@stop
