<?php

namespace App\Http\Controllers;

use App\Models\Submission;
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
            'ktp' => 'required|digits:16',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'lama_operasi' => 'required',
            'kapasitas' => 'required|numeric',
            'jenis_limbah' => 'required|array',
            'penyimpanan' => 'required',
            'kendaraan' => 'required',
        ]);

        Submission::create($data);

        return redirect()->back()->with('success','Data berhasil dikirim.');
    }

    // ADMIN
    public function index()
    {
        return view('submissions.index', [
            'submissions' => Submission::latest()->paginate(10)
        ]);
    }
}
