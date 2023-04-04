<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $bayi = Bayi::where([
            ['nama', '!=', Null],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('nama', 'LIKE', '%' . $search . '%')
                        ->get();
                }
            }]
        ])->paginate(6);
        return view('bayi.index', compact('bayi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bayi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        Bayi::create($request->all());

        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        $Bayi = Bayi::find($no_urut);
        return view('bayi.detail', compact('Bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        $Bayi = Bayi::find($no_urut);
        return view('bayi.edit', compact('Bayi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        Bayi::find($no_urut)->update($request->all());

        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {
        Bayi::find($no_urut)->delete();
        return redirect()->route('bayi.index')->with('success', 'Bayi Berhasil Dihapus');
    }
}
