<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use Illuminate\Http\Request;

class JobListingController extends Controller
{
    // GET /api/jobs
    public function index()
    {
        return JobListing::with('category')->get();
    }

    // POST /api/jobs
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'judul' => 'required',
            'perusahaan' => 'required',
            'lokasi' => 'required',
            'tipe_pekerjaan' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'cara_mendaftar' => 'required',
            'batas_pendaftaran' => 'required',
        ]);

        $job = JobListing::create($validated);

        return response()->json([
            'message' => 'Lowongan berhasil ditambahkan',
            'data' => $job
        ], 201);
    }

    // GET /api/jobs/{id}
    public function show($id)
    {
        return JobListing::with('category')->findOrFail($id);
    }

    // PUT /api/jobs/{id}
public function update(Request $request, string $id)
{
    $job = JobListing::findOrFail($id);

    $validated = $request->validate([
        'category_id' => 'required',
        'judul' => 'required',
        'perusahaan' => 'required',
        'lokasi' => 'required',
        'tipe_pekerjaan' => 'required',
        'deskripsi' => 'required',
        'persyaratan' => 'required',
        'cara_mendaftar' => 'required',
        'batas_pendaftaran' => 'required',
    ]);

    $job->update($validated);

    return response()->json([
        'message' => 'Lowongan berhasil diperbarui',
        'data' => $job
    ]);
}

    // DELETE /api/jobs/{id}
    public function destroy(string $id)
    {
        $job = JobListing::findOrFail($id);

        $job->delete();

        return response()->json([
            'message' => 'Lowongan berhasil dihapus'
        ]);
    }
}