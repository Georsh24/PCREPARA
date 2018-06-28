<div class="col-md-6">
    <div class="form-group">

        <label>Nombre de Usuario</label>
        <input type="text" class="form-control" name="nombre"  placeholder="Escribe tus nombre" <?php $validador -> mostrar_nombre() ?>>
        <?php
        $validador -> mostrar_error_nombre();
        ?>
    </div>
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos" <?php $validador -> mostrar_apellidos() ?>>
        <?php
        $validador -> mostrar_error_apellidos();
        ?>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="ejemplo@ejemplo.com" <?php $validador -> mostrar_email() ?>>
        <?php
        $validador -> mostrar_error_email();
        ?>
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="clave" placeholder="Contraseña" <?php $validador -> mostrar_clave() ?>>
        <?php
        $validador -> mostrar_error_clave();
        ?>
    </div>
    <div class="form-group">
        <label>Confirmar Contraseña</label>
        <input type="password" class="form-control" name="clave2" placeholder="Confirmar Contraseña" <?php $validador -> mostrar_clave2() ?>>
        <?php
        $validador -> mostrar_error_clave2();
        ?>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Calle</label>
        <input type="text" class="form-control" name="calle" placeholder="Calle" <?php $validador -> mostrar_calle() ?>>
        <?php
        $validador -> mostrar_error_calle();
        ?>
    </div>
    <div class="form-group">
        <label>Fracc/Colonia</label>
        <input type="text" class="form-control" name="fraccionamiento" placeholder="Fraccionamiento" <?php $validador -> mostrar_fraccionamiento() ?>>
        <?php
        $validador -> mostrar_error_fraccionamiento();
        ?>
    </div>
    <div class="form-group">
        <label>Numero</label>
        <input type="number" class="form-control" name="numero" placeholder="#numero" <?php $validador -> mostrar_numero() ?>>
        <?php
        $validador -> mostrar_error_numero();
        ?>
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="number" class="form-control" name="telefono" placeholder="Lada + Numero" <?php $validador -> mostrar_telefono() ?>>
        <?php
        $validador -> mostrar_error_telefono();
        ?>
    </div>
    <div class="col-md-6">
        <br>
        <button type="reset" class="btn btn-defeult btn-primary">Limpiar </button>
        <button type="submit" class="btn btn-defeult btn-primary" name="enviar"> Guardar</button>
    </div>
    <div class="col-md-6">
        <p>
            <a>¿Ya tienes Contraseña?</a>
        </p>
        <p>
            <a>¿Olvisate tu contraseña?</a>
        </p>
    </div>