<?php

namespace proyectQr\Http\Controllers;

use Illuminate\Http\Request;
use proyectQr\Customer;

class CustomerController extends Controller
{
    public function actionIndex()
    {
    	return view('customers.registrar');
    }

    public function actionModalCustomer()
    {
    	return view('ajax_customer.modalCustomer');
    }

    public function actionGuardarCustomer(Request $request)
    {
    	$usuario = new Customer;
    	$usuario->nombre = $request->input('nombre');
    	$usuario->telefono = $request->input('telefono');
    	$usuario->save();
    }

    public function actionCargarTabla()
    {
    	$usuarios = Customer::get();

    	return view('ajax_customer.tablaUsuarios')
    				->with('usuarios',$usuarios);
    }

    public function actionAsignar()
    {
		return view('customers.asignar');
    }
}
