@extends('layouts.admin')
@section('title', 'Reacties')
@section('back', route('admin.home'))

@section('content')
    @foreach ($comments as $comment)
        <x-comment-admin-card :comment="$comment" />
    @endforeach
@endsection
