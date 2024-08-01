@extends('layout.mainlayout')
@section('main')
    
    <h1>Hurry Up</h1>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>

    {{-- services --}}
    @include('sections.service')

@endsection