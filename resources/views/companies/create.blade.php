@extends('layouts.main')

@section('title', 'Create company')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('companies.store') }}">

            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Create new company</span>
                </div>
                <div class="card-body">
                    @include('companies.form')
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('companies.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>

    </div>

@endsection
