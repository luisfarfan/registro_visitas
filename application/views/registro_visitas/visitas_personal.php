<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <br>
                <form id="form_filtro" class="form-horizontal form-label-left input_mask" method="POST">

                    <div class="col-md-5 col-sm-5 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left submit-form" name="SEDE_ACTU_PER" id="sedes_inei">
                            <?php
                            foreach ($sedes as $row => $value) {
                                if (isset($_POST['SEDE_ACTU_PER'])) {
                                    if ($_POST['SEDE_ACTU_PER'] == $value['CODI_SEDE_SED']) {
                                        echo '<option selected value=' . $value['CODI_SEDE_SED'] . '>' . $value['DESC_SEDE_SED'] . '</option>';
                                    } else {
                                        echo '<option value=' . $value['CODI_SEDE_SED'] . '>' . $value['DESC_SEDE_SED'] . '</option>';
                                    }
                                } else {
                                    echo '<option value=' . $value['CODI_SEDE_SED'] . '>' . $value['DESC_SEDE_SED'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        <p>
                            Activo:
                            <input type="radio" name="ESTA_TRAB_PER" id="ESTA_TRAB_PER" <?php
                            if (isset($_POST['ESTA_TRAB_PER'])) {
                                if ($_POST['ESTA_TRAB_PER'] == '1') {
                                    echo 'checked';
                                }
                            }
                            ?> value="1"/> Inactivo:
                            <input type="radio" name="ESTA_TRAB_PER" id="ESTA_TRAB_PER1" <?php
                            if (isset($_POST['ESTA_TRAB_PER'])) {
                                if ($_POST['ESTA_TRAB_PER'] == '2') {
                                    echo 'checked';
                                }
                            }
                            ?> value="2" />
                        </p>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group has-feedback">
                        <select class="form-control has-feedback-left submit-form" name="TIPO_PLAN_TPL" id="sedes_inei">
                            <?php
                            foreach ($planilla as $row => $value) {
                                if (isset($_POST['TIPO_PLAN_TPL'])) {
                                    if ($_POST['TIPO_PLAN_TPL'] == $value['TIPO_PLAN_TPL']) {
                                        echo '<option selected value=' . $value['TIPO_PLAN_TPL'] . '>' . $value['TPLANI'] . '</option>';
                                    } else {
                                        echo '<option value=' . $value['TIPO_PLAN_TPL'] . '>' . $value['TPLANI'] . '</option>';
                                    }
                                } else {
                                    echo '<option value=' . $value['TIPO_PLAN_TPL'] . '>' . $value['TPLANI'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <button type="submit">ENVIAR</button>
                    <div class="ln_solid"></div>

                </form>
                <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>NOMB</th>
                            <th>TPLANI</th>
                            <th>CARGO</th>
                            <th>DEPEN</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>DNI</th>
                            <th>NOMB</th>
                            <th>TPLANI</th>
                            <th>CARGO</th>
                            <th>DEPEN</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


        <div class="col-md-2 col-sm-2 col-xs-2">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubicación Física <small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <img src="http://iinei.inei.gob.pe/iinei/asistencia/fotos/41570699.jpg" class="img-responsive">
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-5 col-xs-5">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Ubicación Física <small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dependencia <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="dependencia" name="dependencia" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sede <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="sede" name="sede" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="direccion" class="form-control col-md-7 col-xs-12" type="text" name="direccion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Referencia</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="referencia" class="form-control col-md-7 col-xs-12" type="text" name="referencia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Piso / Nivel</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="piso" class="form-control col-md-7 col-xs-12" type="text" name="piso">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomb. Oficina</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="oficina" class="form-control col-md-7 col-xs-12" type="text" name="oficina">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="">
                    <div class="x_title">
                        <h2>Registro de marcaciones del día <small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Primer Registro</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name" data-parsley-id="7725">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-sm-5 col-xs-5">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Contactos <small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <table class="table table-responsive table-hover">

                        <th>Número</th>
                        <th>Tipo Teléfono</th>
                        <th>Número</th>

                    </table>
                </div>
                <div class="">
                    <div class="x_title">
                        <h2>Teléfono movil asignado <small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <table class="table table-responsive table-hover">
                            <tr>
                                <th>Número</th>
                                <th>Operador</th>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
