

<?php 

function entradaPdf($nombre,$apellido,$correo,$pelicula,$fecha,$sesion,$hora){
	


$direccionImage=base_url("/assets/img/1.png");

$html=<<<HTML
	<html>
    <head>
        
        <style>
		
			p{
		color:#ffffff;
		
		}
		
		label{
		
		color: grey;
		}
            
            img{
                
                
                width: 100%;
                height: 150px;
                
                
            }
            
         
            
            table{
                position: relative;
                border:2px solid black;
                border-radius: 10%;
                
                background-color: darkred;
                
                width: 700px;
                height: 150px;
                
            }
		
		
            td{
                width: 40%;
                height: 300px;
            }
            
            
            
            #datosPelicula{
                position: relative;
                float: left;
                margin-top: 5%;
                width: 50%;
                height: 40%;
                
            }
            
            
            
            div#usuario{
                position: relative;
                float: left;
                
            }
            
            img{
                width: 50%;
                height: 40%;
            }
            
            p{
                margin: 0;
                padding: 0;
                margin-top: 5px;
                
            }
            
            table p{
                color: #ffffff;
                font-size: 100%;
                
            }
            
            label{
                color: gray;
                
            }
            
            #contenedor{
                /*position: absolute;
                border:2px solid black;
                
                width: 300px;
                height: 150px;*/
                
                
            }
        
        </style>
        
    </head>
    
    <body>
       
        <div id="contenedor">
        <h1>Aqui tiene su entrada, puede presentarla a la entrada del cine. Que disfrute</h1><br><br>
        
        
            
            <table >
            
                <tr>
                
                    <td ><img id="cartel"  src="http://localhost/Proyecto/assets/img/pelicula/1.png"></td>
                    <td>
                    
                     <div id="datosPelicula" style="width:400px">
                
                <label>Usuario:</label><br><p>Carlos Garbajosa Barroso</p><br>        
                <label>Pelicula:</label><br><p>Batman v Superman</p><br>
                <label>Fecha:</label><br><p>30/03/2016</p><br>
                <label>Hora:</label><br><p>20:00</p><br>
                <label>Session:</label><br><p>1bc20</p><br>
                <label>Asientos:</label><br><p>10f20a</p><br>
                
            </div>
                    
                    </td>
                    
                </tr>
                
                
            
            
            </table>
        
            
        
        
        
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