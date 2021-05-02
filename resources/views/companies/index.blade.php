@extends('layouts.main')

@section('title', 'Companies list')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header">
                <span>Companies list</span>
                <a class="float-right" href="{{ route('companies.create') }}">Add new company</a>
            </div>
            <div class="card-body">
                <table class="table table-borderless custom-table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quotes</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($companies as $company)
                        <tr>
                            <th scope="row">{{ $company->id }}</th>
                            <td>{{ $company->name }}</td>
                            <td><a href="{{ $company->link }}" target="_blank">Click me!</a></td>
                            <td class="actions">
                                <a href="{{ route('companies.edit', ['company' => $company->id]) }}" class="mr-2"><i class="bi-pencil icon"></i></a>
                                <form method="post" style="display: inline" action="{{ route('companies.destroy', ['company' => $company->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="delete-prompt" type="submit" style="border:none; background: none; cursor:pointer;"><i class="bi-trash icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
