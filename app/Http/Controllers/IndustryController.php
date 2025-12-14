<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::latest()->paginate(5);
        return view('industries.index', compact('industries'));
    }

    public function create()
    {
        return view('industries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'industry_name' => 'required|min:3',
            'location' => 'required',
            'capacity' => 'nullable',
            'contact' => 'nullable',
            'method' => 'nullable',
        ]);

        Industry::create($request->all());

        return redirect()->route('industries.index')->with('success', 'Industry berhasil dibuat.');
    }

    public function show(Industry $industry)
    {
        return view('industries.show', compact('industry'));
    }

    public function edit(Industry $industry)
    {
        return view('industries.edit', compact('industry'));
    }

    public function update(Request $request, Industry $industry)
    {
        $request->validate([
            'industry_name' => 'required|min:3',
            'location' => 'required',
        ]);

        $industry->update($request->all());

        return redirect()->route('industries.index')->with('success', 'Industry berhasil diperbarui.');
    }

    public function destroy(Industry $industry)
    {
        $industry->delete();
        return redirect()->route('industries.index')->with('success', 'Industry berhasil dihapus.');
    }

    public function submissions()
{
    $industry = auth()->user()->industry;

    return view('submissions.index', [
        'submissions' => $industry->submissions()->latest()->get()
    ]);
}

}
