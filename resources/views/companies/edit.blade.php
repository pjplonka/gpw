@extends('layouts.main')

@section('title', 'Edit company')

@section('content')

    <div class="container">

        <form method="POST" action="{{ route('companies.update', ['company' => $company->id]) }}">

            @method('put')
            @csrf

            <div class="card">
                <div class="card-header">
                    <span>Edit company</span>
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
