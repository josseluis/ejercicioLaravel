<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\contactosFormRequest;
use App\Contacto;

class controladorcontacto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contactosCtrl = Contacto::all();
        return view('contactos.index',compact('contactosCtrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $id = uniqid();
        $contactosCtrl = new Contacto(array(
            'name' => $request->get('name'),
            'telephone' => $request->get('telephone'),
            'email' => $request->get('email'),
            'parents' => $request->get('parents'),
            'id' => $id
        ));

        $contactosCtrl -> save();

        return redirect('/') -> with('status','El contacto ha sido creado. su id unica: ' .$id);

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
        $contactosCtrl = Contacto::whereSlug($id)->firstOrFail();
        return view('contactos.show',compact('contactosCtrl'));
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
        $contactosCtrl = Contacto::whereSlug($id)->firstOrFail();
        return view('contactos.show',compact('contactosCtrl'));
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
        $contactosCtrl = Contacto::whereSlug($id)->firstOrFail();
        $contactosCtrl->name = $request->get('name');
        $contactosCtrl->telephone=$request->get('telephone');
        $contactosCtrl->email=$request->get('email');
        $contactosCtrl->parents=$request->get('parents');
        if($request->get('status') != null)
        {
            $contactosCtrl->status = 0;
        }
        else
        {
            $contactosCtrl->status = 1;
        }
        $contactosCtrl->save();
        return redirect(action('controladorcontacto@edit',$contactosCtrl->id))->with('status','El contacto'.$id .' ha sido actualizado!');
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
        $contactosCtrl = Contacto::whereSlug($id)->firstOrFail();
        $contactosCtrl->delete();
        return redirect('/contactos') -> with('status', 'El contacto ' .$id .' ha sido borrado');
    }
}
