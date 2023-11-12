<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisLayananContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;

        if (strlen($katakunci)) {
            $data = Jenis_layanan::where('id', 'like', "%$katakunci%")
                ->orWhere('jenis_layanan', 'like', "%$katakunci%")
                ->orWhere('harga_layanan', 'like', "%$katakunci%")
                ->get();
        } else {
            $data = Jenis_layanan::all();
        }

        return view('jenislayanan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jenislayanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Untuk menampilkan data agar tidak hilang
        Session::flash('id', $request->id);
        Session::flash('jenis_layanan', $request->jenis_layanan);
        Session::flash('harga_layanan', $request->harga_layanan);

        //Untuk memvalidasi data
        $request->validate([
            'id' => 'required|numeric|unique:jenis_layanan,jenis_layanan',
            'jenis_layanan' => 'required|unique:jenis_layanan,jenis_layanan',
            'harga_layanan' => 'required',
        ], [
            'id.required' => 'ID wajib diisi',
            'id.numeric' => 'ID wajib dalam angka',
            'id.unique' => 'ID yang diisikan sudah ada dalam database',
            'jenis_layanan.required' => 'Jenis layanan wajib diisi',
            'jenis_layanan.unique' => 'Jenis layanan yang diisikan sudah ada di database',
            'harga_layanan.required' => 'Harga layanan wajib diisi'
        ]
        );


        $data = [
            'id' => $request->id,
            'jenis_layanan' => $request->jenis_layanan,
            'harga_layanan' => $request->harga_layanan
        ];
        Jenis_layanan::create($data);
        return redirect()->to('jenislayanan')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Jenis_layanan::where('id', $id)->first();
        return view('jenislayanan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //Untuk memvalidasi data
        $request->validate([
            'jenis_layanan' => 'required',
            'harga_layanan' => 'required',
        ], [
            'jenis_layanan.required' => 'Jenis layanan wajib diisi',
            'harga_layanan.required' => 'Harga layanan wajib diisi'
        ]
        );

        $data = [
            'jenis_layanan' => $request->jenis_layanan,
            'harga_layanan' => $request->harga_layanan
        ];
        Jenis_layanan::where('id', $id)->update($data);
        return redirect()->to('jenislayanan')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Jenis_layanan::where('id', $id)->delete();
        return redirect()->to('jenislayanan')->with('success', 'Berhasil melakukan delete data');
    }
}
