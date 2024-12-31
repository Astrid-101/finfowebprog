<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'location' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // File harus berupa jpg, jpeg, png, atau pdf
        ]);

        try {
            // Proses upload file
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '_' . $file->getClientOriginalName(); // Menyimpan nama file dengan timestamp
                $file->storeAs('file', $fileName, 'public'); // Simpan file di folder 'storage/app/public/reports'
            }

            // Simpan data ke database
            $report = new Report();
            $report->nama = $validatedData['nama'];
            $report->email = $validatedData['email'];
            $report->location = $validatedData['location'];
            $report->file = $fileName; // Simpan nama file ke kolom 'file'
            $report->save();

            // Tambahkan pesan sukses ke session
            return redirect()->back()->with('success', 'Report berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Tambahkan pesan error ke session jika terjadi kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan report: ' . $e->getMessage());
        }
    }
}
