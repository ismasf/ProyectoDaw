

<?php 

function entradaPdf($nombre,$apellido,$correo,$pelicula,$fecha,$sesion,$hora){
	


$direccionImage=base_url("/assets/img/1.png");

$html=<<<HTML
	<html>
    <head>
        
        <style>
            
            #imagen{
                
                float:left;
                margin-left: 3%;
                margin-top:3%;
                width: 49%;
                height: 90%;
                
                
            }
            
            
            #cartel{
                
                
                border-radius: 10%;
                box-shadow: 10px 10px 5px #6E1015;
                -webkit-box-shadow: 10px 10px 5px #6E1015;
                -moz-box-shadow: 10px 10px 5px #6E1015;
            }
            #entrada{
                position: relative;
                border:2px solid black;
                border-radius: 10%;
                
                background-color: darkred;
                width: 100%;
                height: 80%;
            }
            #datosPelicula{
                position: relative;
                float: left;
                margin-top: 5%;
                width: 47%;
                height: 60%;
            }
            
            
            div#usuario{
                position: relative;
                float: left;
                
            }
            div#usuario p{
                position: relative;
                float: right;
                
                
            }
            img{
                width: 80%;
                height: 70%;
            }
            
            
            #contenedor{
                position: absolute;
                border:2px solid black;
                
                width: 700px;
                height: 400px;
                
                
            }
        
        </style>
		
		
		
		<style>
		
		#datosPelicula label{
				
                color:white;
                font-size: 175%;
            }
            p{
                display: inline;
                color: white;
                font-size: 170%;
            }
            
		
		
		</style>
        
        
    </head>
    
    <body>
       
        <div id="contenedor">
        <p>Aqui tiene su entrada, puede presentarla a la entrada del cine. Que disfrute</p>
        
        <div id="entrada">
            <div id="imagen">
                <img id="cartel"  src="http://localhost/Proyecto/assets/img/1.png">
            </div>
            
            <div id="datosPelicula">
            
                <label>Pelicula:</label><br><p>Batman v Superman</p><br>
                <label>Fecha:</label><br><p>30/03/2016</p><br>
                <label>Hora:</label><br><p>20:00</p><br>
                <label>Session:</label><br><p>1bc20</p><br>
                <label>Asientos:</label><br><p>10f20a</p><br>
                
            </div>
            
            <div id="usuario">
             
                
                    <p id="comprador">Carlos Garbajosa Barroso</p>
            
            </div>
        
            
        
        
        </div>
            </div>
    
    </body>

</html>
	
HTML;
	$nombrePdf = "Entradas.pdf";
	
$ci =& get_instance();
$ci->load->library('m_pdf');
	
	//$this->load->library('m_pdf');
	
	
	$ci->m_pdf->pdf->WriteHTML($html);
	
	
	
	
	$ci->m_pdf->pdf->Output($nombrePdf, "D");
	
	
	
	
	
}



?>