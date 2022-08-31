<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        $produk = Produk::paginate(4);
        return view('user.beranda', compact('produk', 'pesananTotal'));
    }

    public function menu()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        $produk = Produk::all();
        return view('user.menu', compact('produk', 'pesananTotal'));
    }

    public function menuDetail($produk_id)
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        $produk = Produk::find($produk_id);
        return view('user.produk_detail', compact('produk', 'pesananTotal'));
    }

    public function about()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        return view('user.tentangkami', compact('pesananTotal'));
    }

    public function cart()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if(!empty($pesanan)) {
            $pesananDetail = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->get();
            return view('user.keranjang', compact('pesanan', 'pesananDetail', 'pesananTotal'));
        } else {
            redirect()->route('menu.index');
        }
    }

    public function riwayat()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        return view('user.riwayat_pembelian', compact('pesananTotal'));
    }

    public function profil()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if($pesanan == null) {
            $pesananTotal = 0;
        } else {
            $pesananTotal = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->count();
        }
        return view('user.profile', compact('pesananTotal'));
    }

    public function profilUpdate(Request $request, $user_id)
    {
        $request->validate([
            'no_telpon' => 'required|max:13',
            'alamat' => 'required|max:150'
        ], [
            'no_telpon.required' => 'No Handphone tidak boleh kosong',
            'no_telpon.max' => 'No Handphone tidak boleh lebih dari 13 angka',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.max' => 'Alamat tidak boleh lebih dari 150 karakter',
        ]);

        $user = User::find($user_id);
        dd($user);
        $user->update([
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat,
        ]);
        $user->save();

        return back()->with('status', 'Profile Berhasil Di perbaharui');
    }

    public function pesan(Request $request, $produk_id)
    {
        // Validasi
        $request->validate([
            'jumlah_pesanan' => 'required',
        ],[
            'jumlah_pesanan.required' => 'Masukkan jumlah pesanan',
        ]);

        $produk = Produk::find($produk_id);
        $tanggal = Carbon::now()->format('Y-m-d');
        $total = $produk->harga_produk * $request->jumlah_pesanan;

        // User menambah pesanan
        $pesananTambah = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();

        // Simpan pesanan ke database pesanan
        if(!($request->jumlah_pesanan) == 0) {
            if(empty($pesananTambah)){
                $pesanan = new Pesanan([
                    'user_id' => Auth::user()->user_id,
                    'tanggal' => $tanggal,
                    'status' => 'Check Out',
                    'total_harga' => $total,
                ]);
                $pesanan->save();
            } else {
                $pesananUpdate = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
                $pesananUpdate->update([
                    'total_harga' => $pesananUpdate->total_harga + $total,
                ]);
                $pesananUpdate->save();
            }
        } else {
            return back()->with('status', 'Masukkan jumlah pesanan');
        }

        $newPesananId = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        $total = $produk->harga_produk * $request->jumlah_pesanan;
       
        $pesananDetailTambah = PesananDetail::where('produk_id', $produk->produk_id)->where('pesanan_id', $newPesananId->pesanan_id)->first();

        if(!($request->jumlah_pesanan) == 0) {
            if(empty($pesananDetailTambah)) {
                // Menambah baru pesanan 
                $pesananDetail = new PesananDetail([
                    'produk_id' => $produk->produk_id,
                    'pesanan_id' => $newPesananId->pesanan_id,
                    'jumlah_pesanan' => $request->jumlah_pesanan,
                    'total_harga'  => $total,
                ]);
                $pesananDetail->save();
            } else {
                // Mengupdate pesanan detail
                $pesananDetailUpdate = PesananDetail::where('produk_id', $produk->produk_id)->where('pesanan_id', $newPesananId->pesanan_id)->first();
                $pesananDetailUpdate->update([
                    'jumlah_pesanan' => $pesananDetailUpdate->jumlah_pesanan + $request->jumlah_pesanan,
                    'total_harga' => $pesananDetailUpdate->total_harga + $total,
                ]);
                $pesananDetailUpdate->save();
            }
        } else {
            return back()->with('status', 'Masukkan jumlah pesanan');
        }

        return redirect()->route('keranjang.index')->with('status', 'Pesanan anda sudah masuk ke keranjang');
    }
}
