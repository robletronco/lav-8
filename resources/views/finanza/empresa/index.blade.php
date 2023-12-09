
@extends('adminlte::page')

@section('content_header')
  <h1> Listado Empresas</h1>
@stop

@section('content')

<a href="empresa/create" class="btn btn-primary mb-3">CREAR</a>

<table  id ="empresa" class="table  table-striped table-bordered mt=4 shadow-lg" style="width:100%">
  <thead class="bg-primary text-wite">
    <th scope ="col">RUT</th>
    <th  scope ="col">RAZON SOCIAL</th>
    <th  scope ="col">GIRO</th>
    <th  scope ="col">TELEFONO</th>
    <th scope  ="col">Acciones</th> 


  </thead>
  <tbody>
    <tr>
      <td>11.111.111-2</td>
      <td>CHILE DIGITAL SPA</td>
      <td>DESARROLLO SOFTWARE</td>
      <td>+56 9 9999999</td> 
      <td>
       <a class="btn btn-info">Editar</a>
       <button class = "btn btn-danger">Borrar</button>
      </td>
    </tr>
    
    <tr>
      <td>11.111.111-2</td>
      <td>CHILE DIGITAL SPA</td>
      <td>DESARROLLO SOFTWARE</td>
      <td>+56 9 9999999</td>
      <td>
         <a class="btn btn-info">Editar</a>
         <button class = "btn btn-danger">Borrar</button>
      </td>
    </tr>
    
    <tr>
    <td>11.111.111-2</td>
      <td>CHILE DIGITAL SPA</td>
      <td>DESARROLLO SOFTWARE</td>
      <td>+56 9 9999999</td>
      <td>
       <a class="btn btn-info">Editar</a>
       <button class = "btn btn-danger">Borrar</button>
      </td>
    </tr>
  </tbody>
</table>

@section('css')
   <link rel="stylesheet"   href=" https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.css"
 @stop

@stop
@section('js')
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.js"></script>
  <script>
      $(document).ready(function() {
        new DataTable('#empresa');

      }
      )
   </script>   
@stop

S