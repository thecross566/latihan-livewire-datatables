@extends('layouts.base')
@section('title', 'User')
@section('body')

    <div class="card">
        <div class="card-header">
            LiveWire DataTables
        </div>
        <livewire:user-component />

        <div class="card-body">
            <livewire:user-datatables searchable="name, email" />
        </div>

    </div>
@endsection
