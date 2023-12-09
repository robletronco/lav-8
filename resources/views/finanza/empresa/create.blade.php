@extends('adminlte::page')

@section('content_header')
 <div class ="container">
   <div class ="row p-2">
    <div class= "col-10">
       <div class="card">
         <div class="card-header text-center  font-weight-bold">
              Ingreso Datos Empresa
         </div>
        <div class="card-body">
         <form id ="form-data class ="needs-validation" >
         @csrf
         <div class = "row">
           <div class="form-group  col-4">
           <div class="form-group  col-4">
              <label for = "validationCustom01" class ="form-label">Rol Empresa</label>
              <input type ="text"  id="rle" placeholder="Ingrese Rut Empresa"  class="form-control my-2" required>
           </div>  
              <label for = "validationCustom01" class ="form-label">Rut Emprsa</label>
              <input type ="text"  id="rt" placeholder="Ingrese Rut Empresa"  class="form-control my-2" required>
           </div>  
             <div class="form-goup col-8">
                <label for = "valida-2"class = "form-label">Razon Social</label>
                <input type ="text" id="rs" placeholder="Ingresse Raszon Social" class="form-control my-2" required>
              </div>
              <div class="form-group col-6">
                 <label for = "valida-3"class = "form-label">Giro</label>
                <input type ="text" id="gr" placeholder="Ingresse Giro" class="form-control my-2" required>
              </div>
              <div class="form-goup col-6">
                 <label for = "valida-3"class = "form-label">Nombre Fantasía</label>
                 <input type ="text" id="nf" placeholder="Ingresse Nombre de Fantasía" class="form-control my-2" required>
             </div>
              <div class="form-goup col-6">
                 <label for = "valida-2"class = "form-label">Direccio</label>
                 <input type ="text" id="dr" placeholder="Ingresse Direccion" class="form-control my-2" required>
              </div>
              <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">Comuna</label>
                <input type ="text" id="cm" placeholder="Ingresse Comuna" class="form-control my-2" required>
             </div>
             <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">Rgion</label>
                <input type ="text" id="rg" placeholder="Ingresse Region" class="form-control my-2" required>
             </div>
             <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">Telefono</label>
                <input type ="text" id="tl" placeholder="Ingresse Telefono" class="form-control my-2" required>
             </div>
             <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">eMail</label>
                <input type ="text" id="eml" placeholder="Ingresse eMail" class="form-control my-2" required>
             </div>
             <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">Contacto</label>
                <input type ="text" id="ct" placeholder="Ingresse Contacto" class="form-control my-2" required>
             </div>
             <div class="form-group col-6">
                <label for = "valida-2"class = "form-label">Comunal</label>
                <input type ="text" id="cm" placeholder="Ingresse Comuna" class="form-control my-2" required>
             </div>
           </div>
           <button type = "submit" id = "enviar" class="btn btn-primary">Cancelar </button>  
           <button type = "submit" id = "enviar" class="btn btn-primary">Guardar </button>  
         </div>   
         </form>
        </div>
      </div>
     </div>
  </div>
</div> 

@stop