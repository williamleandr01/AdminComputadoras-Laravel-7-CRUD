<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValRegComputadora;
use App\models\Computadora;
use App\models\ImgComputadora;
use App\models\InfoComputadora;
use App\models\PrecioComputadora;
use App\models\VistaComputadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadora = VistaComputadora::orderBy('id_computadora')->get();
        return view('includes.indexcomputadora', compact('computadora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('includes.regcomputadora');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValRegComputadora $request)
    {

        $nombreComputadora = request()
        ->except('_token', 'precio_compu', 'img_compu', 'descrip_compu');

        Computadora::insert($nombreComputadora);
        $varid = Computadora::get('id_computadora')->max();

        $precioComputadora = request()
        ->except('_token', 'nombre_computadora', 'img_compu', 'descrip_compu');

        $precioComputadora['id_computadora'] = $varid['id_computadora'];
        PrecioComputadora::insert($precioComputadora);


        $imgComputadora = request()
        ->except('_token', 'precio_compu', 'nombre_computadora', 'descrip_compu');

        if($request->hasFile('img_compu'))
        {
            $imgComputadora['img_compu'] = $request
            ->file('img_compu')->store('uploads', 'public');
        }

        $imgComputadora['id_computadora'] =  $varid['id_computadora'];
        ImgComputadora::insert($imgComputadora);

        $infoComputadora = request()
        ->except('_token', 'precio_compu', 'nombre_computadora', 'img_compu');

        $infoComputadora['id_computadora'] = $varid['id_computadora'];
        InfoComputadora::insert($infoComputadora);



        return redirect('computadora/crear')->with('mensaje', 'Se creó la computadora correctamente');
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
        $computadora = VistaComputadora::where('id_computadora', '=', $id)->get();
        return view('includes.editcomputadora', compact('computadora'));
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
        $nombreComputadora = request()
        ->except('_token', '_method', 'id_computadora', 'precio_compu', 'img_compu', 'descrip_compu');

        Computadora::where('id_computadora', '=', $id)->update($nombreComputadora);

        $precioComputadora = request()
        ->except('_token', '_method', 'id_computadora', 'nombre_computadora', 'img_compu', 'descrip_compu');

        PrecioComputadora::where('id_computadora', '=', $id)->update($precioComputadora);


        $imgComputadora = request()
        ->except('_token', '_method', 'id_computadora', 'precio_compu', 'nombre_computadora', 'descrip_compu');

        if($request->hasFile('img_compu'))
        {
            $imgComputadora['img_compu'] = $request
            ->file('img_compu')->store('uploads', 'public');
        }

        ImgComputadora::where('id_computadora', '=', $id)->update($imgComputadora);

        $infoComputadora = request()
        ->except('_token', '_method', 'id_computadora', 'precio_compu', 'nombre_computadora', 'img_compu');

        InfoComputadora::where('id_computadora', '=', $id)->update($infoComputadora);

        $computadora = VistaComputadora::where('id_computadora', '=', $id)->get();

        return redirect()->route('computadora')->with('mensaje', 'La computadora # '.$id.' se editó exitosamaente !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computadora = Computadora::where('id_computadora', '=', $id);
        $computadora->delete();
        return redirect()->route('computadora')->with('mensaje', 'La computadora # '.$id.' se eliminó exitosamaente !');
    }
}
