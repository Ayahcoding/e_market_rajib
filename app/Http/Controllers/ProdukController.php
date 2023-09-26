<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

use Illuminate\Database\QueryException;

use illuminate\support\Facades\DB;
use Mockery\Expectation;
use PDOException;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            try {
                $data['produk'] = Produk::orderby('created_at', 'DESC')->get();
            
            return view('produk.index')->with($data);
        } catch (QueryException | Expectation | PDOException $error) {
            $this->failResponse($error->getMessage(), $error->getcode());
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        }

        /**
         * Store a newly created resource in storage.
         *
     * @param  \App\Http\Requests\StoreProdukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProdukRequest $request)
    {
       Produk::create($request->all());

        return redirect('produk')->with('success', 'Data produk berhasil di tambahkan!');
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */

    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdukRequest  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdukRequest $request, Produk $produk)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        try {
            $produk->delete();

        return view('produk')->with('success', 'data berhasil dihapus!');
    }catch (QueryException | Expectation | PDOException $error) {
        $this->failResponse($error->getMessage(), $error->getcode());
    }
    }
}
