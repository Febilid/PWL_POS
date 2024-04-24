@extends('adminlte::page')

{{-- Extend and customize the browser title --}}
@section('title', config('adminlte.title') . (isset($subtitle) ? ' | ' . $subtitle : ''))

{{-- Vite integration --}}
@vite('resources/js/app.js')

{{-- Extend and customize the page content header --}}
@section('content_header')
    @isset($content_header_title)
        <h1 class="text-muted">
            {{ $content_header_title }}
            @isset($content_header_subtitle)
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    {{ $content_header_subtitle }}
                </small>
            @endisset
        </h1>
    @endisset
@stop

{{-- Rename section content to content_body --}}
@section('content')
    @yield('content_body')
@stop

{{-- Add common Javascript/Jquery code --}}
@push('js')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
@endpush

{{-- Add common CSS customizations --}}
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" />
    <style type="text/css">
        {{-- You can add AdminLTE customizations here --}}
        /*
            .card-header {
                border-bottom: none;
            }
            .card-title {
                font-weight: 600;
            }
        */
    </style>
@endpush
