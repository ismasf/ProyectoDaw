<script>
  function eliminar(id){
    if(confirm("¿Quieres eliminar la sesion?")){
      window.location="<?=base_url()?>/administrador/eliminarSesionGet/"+id;
    }
   
  }

</script>
        
          <div class="">
            <div class="page-title">
              

              
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar Sesiones</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Lista de sesiones para eliminar.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Titulo</th>
                          <th>Dia/hora</th>
                          <th>Duracion</th>
                          <th>Eliminar</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($sesi as $k):?>
                        <tr>
                          <td><?=$k["id"]?></td>
                          <td><?=$k["titulo"]?></td>
                          <td><?=$k["hora"]?></td>
                          <td><?=$k["duracion"]?></td>
                          <td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(<?=$k["id"]?>)">eliminar</button></td>
                        </tr>
                        
                      <?php endforeach;?>

                        <!-- <?php
                      foreach ($peliculas as $k) {
                         echo "<tr><td>".$k['id']."</td><td>".$k['titulo']."</td><td>".$k['director']."</td><td>".$k['duracion']."</td><td>".$k['id']."</td></tr>";
                      }
                       
                      ?> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
    <script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

   
    <!-- FastClick 
    <script src="<?=base_url()?>assets/css/vendors/fastclick/lib/fastclick.js"></script>-->
    <!-- NProgress 
    <script src="<?=base_url()?>assets/css/vendors/nprogress/nprogress.js"></script>-->
    <!-- Datatables -->
    <script src="<?=base_url()?>assets/css/vendors/datatables.net/js/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
   <!-- <script src="<?=base_url()?>assets/css/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/css/vendors/pdfmake/build/pdfmake.min.js"></script>
     <script src="<?=base_url()?>assets/css/vendors/pdfmake/build/vfs_fonts.js"></script> -->

    

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    
