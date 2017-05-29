        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Taller I</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script type="text/javascript">
        //Codigo para login ajax
        $(document).ready(function(){
            $(".logout").hide(); //Al inciar mi sitio el cerrar sesión se oculta
            $('#btn-login').click(function(){ 
                //Caputuro datos de los input       
                var usuario = $('#usuario').val();
                var pass = $('#pass').val();
                //Creo array para enviar para ver login
                var info ="usuario="+usuario+"&pass="+pass;
                $.ajax({               
                    url: '<?=base_url('login_ajax');?>', //Url del login_ajax 
                    type: 'POST',             //Metodo de envio
                    data: info, //array con el usuario y pass
                    success: function(msg){  //si es correcto la acción
                        if(! msg){ //si no me devuelve usuario no hay en la base de datos
                            $(".login").show(); //muestro inicio de sesión
                            $('#msg_username').html('Datos incorrectos, verifique!!!').css('color','red'); //Muestros el mje de datos incorrectos
                        }else {
                            $(".login").hide(); //Oculto el login
                            $(".logout").show();//Muestro el Cerrar Sesión                     
                            $('#msg_username').html('<b>Bienvenido: '+ msg+ '</b>').css('color','green');  //Muestro usuario logueado                     
                        }                         
                    }
                }); 
            });     
        });   

    </script>
</body>

</html>
