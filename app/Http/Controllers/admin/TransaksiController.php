<?php

namespace App\Http\Controllers\admin;

use App\Models\Menu;
use App\Models\User;
use App\Models\Promo;
use App\Models\Alamat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('admin.pages.transaksi.list', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user   = User::all();
        $menu   = Menu::all();
        $alamat = Alamat::all();
        $promo  = Promo::all();
        return view('admin.pages.transaksi.add', compact('user', 'menu', 'alamat', 'promo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$file = $request->file('image');
        //$filename = sprintf('%s_%s.%s', date('Y-m-d'), md5(microtime(true)), $file->extension());
        //$image_path = $file->move('storage/transaksi', $filename);

        Transaksi::create([
            'user_id'     => $request->pemesan,
            'menu_id'     => $request->pesanan,
            'alamat_id'   => $request->alamat,
            'promo_id'    => $request->promo,
            'qty'         => $request->jumlah,
            'total_price' => $request->total_price,
        ]);

        //return redirect()->route('admin.transaksi')->with(['success' => 'berhasil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
