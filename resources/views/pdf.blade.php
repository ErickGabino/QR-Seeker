
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
    </style>
    </head>
    <body>
        <h1>Factura</h1>
        <hr>
        <div class="contenido">
        <div aling="left">
        Lugar de expedicion:Mexico<br>
        fecha y hora de emision:18/22/2022<br><br>
        <div class="col-2">
      
      </div>
        <hr>
        <div class="contenido">
        <div aling="left">
        <b>Detalle de venta</b>
        <p>{{$producto}}</p><br>
       
        <div class="col-2">
      
      </div>
    </div>

    
        <div class="table-responsive">

<table class="table table-hover">

            
    

  

        <tr>
   
          
        <hr>   
        <br>
        
        <div style="float:right"><h3>Total Factura:8000</h3></div><br></p>

        <br>
        <br>
        <hr>

        <div class="cond row">
      <div class="col-12 mt-3">
     
        <h4>Condiciones y formas de pago</h4>
        <p>El pago se debe realizar en un plazo de 15 dias.</p>
        <p>
          Banco Banreserva
          <br />
          IBAN: DO XX 0075 XXXX XX XX XXXX XXXX
          <br />
          Código SWIFT: BPDODOSXXXX
        </p>
      </div>
    </div>
</div>    
 
</table>


</div>
   
   
        </div>
 
        </div>
      
    </body>
</html>