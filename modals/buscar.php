<!-- Central Modal Medium Info -->
<div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header bg-pagina">
        <p class="heading lead">Buscar</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <form id="form_busqueda" action="../busqueda.php">
        <!--Body-->
        <div class="modal-body text-center">
          <div class="align-content-center"> 
            <div class="flex-row">
              <i class="fa fa-search fa-4x"></i>
            </div>
            <div class="flex-row">
             <small class="text-muted">Busca <strong>Empresas</strong>, <strong>Sectores</strong> y <strong>Ofertas</strong></small>
           </div>           
         </div>
         <input id="texto_busqueda" class="form-control" type="search" placeholder="ej: TuraOnline" aria-label="Busqueda">
         <small class="text-muted">Usa ENTER para buscar</small>
       </div>
     </form>
   </div>  
   <!--/.Content-->
 </div>
</div>
<!-- Central Modal Medium Info-->
