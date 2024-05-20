<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="user-area-all-style sign-up-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form-title">Crear tu cuenta!</h3>
                    </div>
                    <form id="formulario" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="apellido" placeholder="Apellido" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="usuario" placeholder="Usuario" required> 
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="correo" placeholder="Correo Electrónico" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="clave" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 ">
                                <div class="form-group">
                                    <input class="form-control" type="password" name="confirmar" placeholder="Confirmar Contraseña" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-condition">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1" name='chb1' required>
                                    <label for="chb1">
                                        Estoy de acuerdo con la
                                        <a href="#">Terminos y Condiciones de CanchaClick</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="default-btn btn-two" type="submit">
                                    Registrarse
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                            <div class="col-12">
                                <p class="account-desc">
                                    ¿Ya tienes una cuenta?
                                    <a href="<?php echo RUTA_PRINCIPAL . 'login'; ?>"> Login</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'views/template/footer-principal.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/registro.js' ?>"></script>

</body>

</html>