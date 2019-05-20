@extends('layouts.master')

@section('content')

	<div class="container">
    	<div class="row justify-content-center">
			<h4>Usuario</h4>
			<hr>
			
			<a href="#" class="btn btn-primary" onclick="modalCustomer()" data-toggle="modal" data-target="#modalCustomer">Registrar</a>
	           
        </div>
    </div>
   
    <br>
    <div id="cargarTabla"></div>
		
	
@endsection


@section('modals')

<!-- Modal -->
<div class="modal fade" id="modalCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Usuario</h4>
      </div>
      <div id="resultModalCustomer">
      	
      </div>
    </div>
  </div>

</div>


@endsection





