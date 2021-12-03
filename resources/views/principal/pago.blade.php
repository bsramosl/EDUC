<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pago</title>

   
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet"  href="{{asset('css/adminlte.min.css')}}">
</head>
<body  id="pagina"> 
            
  <div class="card">
    <div class="card-body login-card-body">
      <h3 id="pago">Hacer un pago con tarjeta de débito o crédito</h3>     
      <br>
            <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg" autocomplete="cc-name" placeholder="N.º de la tajeta" pattern="[0-9]*"  >
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"> 
                  <div class="form-group">
                      <input type="text" class="form-control form-control-lg" placeholder="Vencimiento "
                       autocomplete="cc-exp" mask="11/11">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-lg" placeholder="Codigo de Seguridad " 
                     autocomplete="cc-csc">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6"> 
                  <div class="form-group">
                      <input type="text" class="form-control form-control-lg" placeholder="Nombres "
                       autocomplete="given-name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-lg" placeholder="Apellidos" 
                     autocomplete="family-name">
                  </div>                  
                </div> 
              </div> 
              <div class="row">
                <div class="col-sm-3"> 
                   
                </div>
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-info btn-block" > Aceptar </button>                
                </div> 
              </div>  
                 
    </div>
    <!-- /.login-card-body -->
  </div>

        </div>

  

<style>
    #pago{
        font-family: PayPalSansBig-Regular,Helvetica Neue,Arial,sans-serif;
        color: #000000;
        text-align: center;
    }

    #pagina{
        -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #e9ecef;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100vh;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}

    .donation-options, .sponsors {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    text-align: center; 
    max-width: 100%;
    margin: auto;
    font-size: 1.25em;
     }

 
</style>












<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>