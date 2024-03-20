@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Manage')

{{-- Content body --}}
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Manage Kategori</h3>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Kategori</h3>
                <div class="card-tools">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Your category list table goes here -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
