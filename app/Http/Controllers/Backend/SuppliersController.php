<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Supplier;
use App\Address;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use File;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup = Supplier::all();
        return view('backend.suppliers.suppliers', ['sup' => $sup]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.suppliers.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Crear Imagen
        $imgName = Carbon::now()->day.$request->supplier_name.'.'.$request->supplier_logo_path->getClientOriginalExtension();
        $request->supplier_logo_path->move(public_path('assets/suppliers'), $imgName);
        // Crear Proveedor
        $supplier = Supplier::create();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_contact_name = $request->supplier_contact_name;
        $supplier->supplier_phone = $request->supplier_phone;
        $supplier->supplier_email = $request->supplier_email;
        $supplier->supplier_logo_path = 'assets/suppliers/'.$imgName;
        $supplier->supplier_description = $request->supplier_description;
        $supplier->save();
        // Crear Dirección del Proveedor
        $address = Address::create();
        $address->address_street = $request->address_street;
        $address->address_neighbourhood = $request->address_neighbourhood;
        $address->address_city = $request->address_city;
        $address->address_state = $request->address_state;
        $address->address_postal_code = $request->address_postal_code;
        // Relacionar Dirección y Proveedor
        $supplier->address()->save($address);
        // Volver a lista de Proveedores
        return route('suppliers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.suppliers.show');//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $sup = Supplier::with('address')->find($id);
       // dd($sup);
       return view('backend.suppliers.edit', ['sup' => $sup]); //
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
     $sup = Supplier::with('address')->find($id);
     // Verificar si se ha cambiado de logotipo
     if ($request->hasFile('supplier_logo_path'))
        {
         // Borrar logotipo antiguo
         $file= $sup->supplier_logo_path;
         $filename = public_path($file);
         File::delete($filename);
         // Crear Nuevo logotipo
         $imgName = Carbon::now()->day.$request->supplier_name.'.'.$request->supplier_logo_path->getClientOriginalExtension();
         $request->supplier_logo_path->move(public_path('assets/suppliers'), $imgName);
         $sup->supplier_logo_path = 'assets/suppliers/'.$imgName;
        }

        // Actualizar Datos del Proveedor
        $sup->supplier_name = $request->supplier_name;
        $sup->supplier_contact_name = $request->supplier_contact_name;
        $sup->supplier_phone = $request->supplier_phone;
        $sup->supplier_email = $request->supplier_email;
        $sup->supplier_description = $request->supplier_description;
        $sup->save();

        // Actualizar Dirección del Proveedor
        $sup->address->address_street = $request->address['address_street'];
        $sup->address->address_neighbourhood = $request->address['address_neighbourhood'];
        $sup->address->address_city = $request->address['address_city'];
        $sup->address->address_state = $request->address['address_state'];
        $sup->address->address_postal_code = $request->address['address_postal_code'];

        // Relacionar Dirección y Proveedor
        $sup->address->save();

        // Volver a lista de Proveedores
        return route('suppliers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $sup = Supplier::find($id);
     $file= $sup->supplier_logo_path;
     $filename = public_path($file);
     File::delete($filename);
     $sup->address()->delete();
     $sup->delete();
     return redirect('manager/suppliers'); //
    }
}
