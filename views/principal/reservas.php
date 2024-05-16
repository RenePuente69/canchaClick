<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $data['title']; ?></span>
            <h2><?php echo $data['subtitle']; ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-<?php echo $data['tipo'] ?> alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            <strong>RESPUESTA: </strong><?php echo $data['mensaje'] ?>
                        </div>

                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <form method="get" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">
                            <div class="check-content">
                                <p>Fecha Llegada</p>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker-1">
                                        <i class="flaticon-calendar"></i>
                                        <input type="text" class="form-control" id="f_llegada" name="f_llegada" value="<?php echo $data['disponible']['f_llegada']; ?>">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-th"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="check-content">
                                <p>Fecha Salida</p>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker-2">
                                        <i class="flaticon-calendar"></i>
                                        <input type="text" class="form-control" id="f_salida" name="f_salida" value="<?php echo $data['disponible']['f_salida']; ?>">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-th"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="check-content">
                                <div class="form-group">
                                    <label for="canchas" class="form-label">Canchas</label>
                                    <select name="canchas" class="select-auto" id="canchas" style="width: 100%;">
                                        <option value="">Seleccionar</option>
                                        <?php foreach ($data['canchas'] as $canchas) { ?>
                                            <option value="<?php echo $canchas['id'] ?>" <?php echo ($canchas['id'] == $data['disponible']['canchas']) ? 'selected' : '' ;?>>
                                            <?php echo $canchas['estilo'] ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="check-btn check-content mb-0">
                                <button class="default-btn" type="submit">
                                    Comprobar
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                        </form>
                        <div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets/img/canchas/' . $data['cancha']['foto']; ?>" alt="Image">
                                <div class="single-rooms-three-content">
                                    <h3><?php echo $data['cancha']['estilo']; ?></h3>
                                    <span class="price"><?php echo $data['cancha']['precio']; ?></span>
                                    <a href="book-table.html" class="default-btn">
                                        Reservar
                                        <i class="flaticon-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'views/template/footer-principal.php'; ?>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/reservas.js' ?>"></script>
<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/disponibilidad.js' ?>"></script>

</body>

</html>