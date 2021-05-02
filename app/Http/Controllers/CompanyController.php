<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index', [
            'companies' => Company::all()
        ]);
    }

    public function create()
    {
        return view('companies.create', [
            'company' => new Company()
        ]);
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'name' => 'required',
            'symbol' => 'required',
            'link' => 'required',
        ]);

        Company::create($payload);

        return redirect('/companies')->with('success', 'Success.');
    }

    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    public function update(Request $request, Company $company)
    {
        $payload = $request->validate([
            'name' => 'required',
            'symbol' => 'required',
            'link' => 'required',
        ]);

        $company->update($payload);

        return redirect('/companies')->with('success', 'Success.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/companies')->with('success', 'Success.');
    }
}
