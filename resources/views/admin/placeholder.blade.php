@extends('admin.layouts.app')

@section('title', $heading)

@section('page-heading', $heading)

@section('content')

<div class="card border-0 shadow-sm p-4">

    <h4>{{ $heading }}</h4>

    <p class="text-muted mb-0">
        This section is ready. Full functionality will be added next.
    </p>

</div>

@endsection
