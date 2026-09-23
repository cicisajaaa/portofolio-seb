<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('services', 'public');
        }

        Service::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'ikon' => $request->ikon,
            'gambar' => $path,
        ]);

        return redirect()->route('services.index')->with('success', 'Layanan baru berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $service->gambar;
        if ($request->hasFile('gambar')) {
            if ($path && Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('gambar')->store('services', 'public');
        }

        $service->update([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_lengkap' => $request->deskripsi_lengkap,
            'ikon' => $request->ikon,
            'gambar' => $path,
        ]);

        return redirect()->route('services.index')->with('success', 'Data layanan berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        if ($service->gambar && Storage::disk('public')->exists($service->gambar)) {
            Storage::disk('public')->delete($service->gambar);
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Layanan berhasil dihapus.');
    }
}