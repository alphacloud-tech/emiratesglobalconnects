@extends('layouts.app')

@section('content')
    {{-- {!! $header !!}
    {!! $mainContent !!}
    {!! $footer !!} --}}

    <livewire:slider />
    {{-- <livewire:partner /> --}}

    <livewire:main-content />

    {{-- <livewire:partner /> --}}
    {{-- <livewire:footer /> --}}
@endsection

