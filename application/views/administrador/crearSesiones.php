<br>
<br>
<form action="<?= base_url()?>administrador/crearSesionesPost">
<?php 
print_r($peliculas);
echo "<br><select name='pelicula'>";
foreach ($peliculas as $pelicula) {
	echo "<option value='".$pelicula['id']."'>".$pelicula['titulo']."</option>";
}
echo "</select>";


?>

<br>
DE: 
<select name="dia1">
	<?php
		for($i=1;$i<30;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="mes1">
	<?php
		for($i=1;$i<=12;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="ano1">
	<?php
		for($i=2016;$i<2019;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<br>
<br>
A:
<select name="dia2">
	<?php
		for($i=1;$i<30;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="mes2">
	<?php
		for($i=1;$i<12;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<select name="ano2">
	<?php
		for($i=2016;$i<2019;$i++){
			echo "<option value='$i'>$i</option>";
		}
	?>

</select>
<br>
<br>
<br>
<select name="hora[]" multiple="multiple">
	<option value="16:00">16:00</option>
	<option value="17:00">17:00</option>
	<option value="18:00">18:00</option>
	<option value="19:00">19:00</option>
	<option value="20:00">20:00</option>
	<option value="21:00">21:00</option>
	<option value="22:00">22:00</option>
</select>
<?php 
echo "<br>Sala: <select name = 'sala'>";
foreach ($salas as $sala) {
	echo "<option value='".$sala['id']."'>".$sala['id']."</option>";
}
echo "</select>";


?>
<br>
<input type="submit"></input>
</form>
<script src="<?=base_url()?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/select2/dist/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/moment.min.js"></script>
<script src="<?=base_url()?>assets/css/vendors/daterangepicker.js"></script>
<link href="<?=base_url()?>assets/css/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Selecionar Pelicula",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>

<script>
  
  function cancelar(){
    window.location="<?=base_url()?>/administrador/modificarPelicula";
  }

  




</script>



<div class="row tile_count">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear sesion para pelicula</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="myForm" action="<?=base_url()?>administrador/crearSesionesPost/" class="form-horizontal form-label-left" method='POST' ENCTYPE="multipart/form-data">
                    	<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Selecione pelicula:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select name="pelicula" class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <?php 
								//print_r($peliculas);
								//echo "<select name='pelicula'>";
								foreach ($peliculas as $pelicula) {
									echo "<option value='".$pelicula['id']."'>".$pelicula['titulo']."</option>";
								}
								//echo "</select>";


							?>
                            
                          </select>
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">De:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Primer dia" aria-describedby="inputSuccess2Status">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>

                        </div>
                        
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hasta:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Primer dia" aria-describedby="inputSuccess2Status">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status" class="sr-only">(success)</span>

                        </div>
                        
                      </div>

                      

                      
                      

                        






                    </form>


                  </div>
                </div>
              










              





    <script src="<?=base_url()?>assets/js/registrar/jquery.validate.min.js"></script>
    

              
    <script>
      

$( "#myForm" ).validate({
  rules: {
    titulo: {
      required: true,
      minlength: 5
    },
    director:{
      required: true,
      minlength: 3
    },
    sino:{
      required: true,
      minlength: 15
    }
  },
  messages:{
    titulo:{
      required: "Introduzca un titulo.",
      minlength: "Introduzca un titulo."
    },
    director:{
      required: "Introduzca un director.",
      minlength: "Introduzca un director."
    },
    sino:{
      required: "Introduzca una sinopsis.",
      minlength: "Introduzca una sinopsis."
    }
  },
  success: "valid",
  submitHandler: function(){ 
    if(confirm("¿Quieres actualizar la pelicula?")){
      myForm.submit();
    }
  }
});




    </script>














        <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'right',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };

        $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange_right').daterangepicker(optionSet1, cb);

        $('#reportrange_right').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange_right').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });

        $('#options1').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
        });

        $('#options2').click(function() {
          $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
        });

        $('#destroy').click(function() {
          $('#reportrange_right').data('daterangepicker').remove();
        });

      });
    </script>

    <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

