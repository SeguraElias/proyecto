<div class="container">
    <br>
    <form action="" name="frmNuevo" method="post">
        <div class="form-row">
            <div class="form-group col-md-2 ms-2 mb-3">
                <button type="button" class="btn btn-danger" onClick="location.replace('index.php?mod=me&form=li');"><i class="bi bi-x-circle me-2"style=" width: 30px"></i>Cancelar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-row d-flex justify-content-center mb-4">
                    <h3>Nuevo medico</h3>
                </div>
                <div class="form-row d-flex justify-content-between mb-4 ms-3">
                    <div class="form-group col-md-3">
                        <label for="">Nombres del medico:</label>
                        <input type="text" name="txtNombres" id="txtNombres" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Apellidos del medico:</label>
                        <input type="text" name="txtApellidos" id="txtApellidos" class="form-control">
                    </div>
                    <div class="form-group col-md-3 me-3">
                        <label for="">Fecha de nacimiento:</label>
                        <input type="date" name="dateFechaNac" id="dateFechaNac" class="form-control">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between mb-4 ms-3">
                    <div class="form-group col-md-3">
                        <label for="">DUI:</label>
                        <input type="text" name="txtDUI" id="txtDUI" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Genero:</label>
                        <select name="cbxGenero" id="cbxGenero" class="form-control">
                            <option selected>Seleccione..</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 me-3">
                        <label for="">Especialidad:</label>
                        <input type="text" name="txtEspecialidad" id="txtEspecialidad" class="form-control">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center mb-4 ms-3">
                    <div class="form-group col-md-3">
                        <label for="">JVPM:</label>
                        <input type="text" name="txtJVPM" id="txtJVPM" class="form-control">
                    </div>
                    <div class="form-group col-md-1">
                    </div>
                    <div class="form-group col-md-3 me-3">
                        <label for="">Telefono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-between mb-4 ms-3">
                    <div class="form-group col-md-3">
                        <label for="">Usuario:</label>
                        <input type="text" name="txtUser" id="txtUser" class="form-control">
                    </div>
                    <div class="form-group col-md-3 me-3">
                        <label for="">Contraseña:</label>
                        <input type="password" name="passCon" id="passCon" class="form-control">
                    </div>
                    <div class="form-group col-md-3 me-3">
                        <label for="">Tipo de usuario:</label>
                        <select name="cbxTipoUsuario" id="cbxTipoUsuario" class="form-control">
                            <option selected>Seleccione..</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                        </select>
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center mt-2">
                    <div class="form-group">
                         <button type="button" class="btn btn-outline-success" onClick="Agregar();"><i class="bi bi-file-earmark-post-fill me-2" style="width: 30px"></i>Guardar</button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <button type="reload" class="btn btn-outline-danger"><i class="bi bi-arrow-clockwise me-2" style="width: 30px"></i>Restablecer</button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>

<script>
    function Agregar(){
        document.forms.frmNuevo.action = 'index.php?mod=me&form=ag';
        document.forms.frmNuevo.submit();
    }
</script>