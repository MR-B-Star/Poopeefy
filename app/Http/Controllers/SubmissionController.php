<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Industry;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function create()
    {
        return view('submission.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'ktp' => 'required|digits:16',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'nama_usaha' => 'required',
            'lama_operasi' => 'required',
            'kapasitas' => 'required|numeric',
            'jenis_limbah' => 'required|array',
            'penyimpanan' => 'required',
            'kendaraan' => 'required',
            'catatan' => 'required',
            'status' => 'required',
        ]);

        Submission::create($data);

        return redirect()->back()->with('success','Data berhasil dikirim.');
    }

    // ADMIN
    public function index()
{
    return view('submissions.index', [
        'submissions' => Submission::latest()->paginate(10),
        'industries'  => Industry::orderBy('industry_name')->get(),
    ]);
}

    public function sendToIndustry(Request $request, Submission $submission)
{
    $request->validate([
        'industry_id' => 'required|exists:industries,id'
    ]);

    $submission->update([
        'industry_id' => $request->industry_id,
        'status' => 'terkirim',
    ]);

    return back()->with('success', 'Submission berhasil dikirim');
}
}



