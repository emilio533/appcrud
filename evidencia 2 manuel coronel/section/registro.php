<?php include('../interfaces/cabecera.php'); ?>
<?php include('../section/cargo.php'); ?>

<div class="col-md-5">
    <form action="" method="post">


    <div class="card">
    <div class="card-header">cargo</div>
    <div class="card-body">
    <div class="mb-3">
    <label for="" class="form-label"><img
        src="image source"
        class="img-fluid rounded-top"
        alt=""/> ID</label>
    <input
        type="text"
        class="form-control"
        name="id"
        id="id"
        value ="<?php echo $id; ?>"
        aria-describedby="helpId"
        placeholder=""
    />
  
</div>
<div class="mb-3">
    <label for="cargo" class="form-label">cargo</label>
    <input
        type="text"
        class="form-control"
        name="cargo"
        id="cargo"
        value="<?php echo $cargo; ?>"
        aria-describedby="helpId"
        placeholder="realice el cambio"
    />
  
</div> 
<div class="btn-group" role="group" aria-label="Button group name">
    <button
        type="submit" name= "accion" value = "agregar"
        class="btn btn-success"
    >
        insert
    </button>
    <button
        type="submit"name= "accion" value = "actualizar"
        class="btn btn-info"
    >
        editar
    </button>
    <button
        type="submit" name= "accion" value = "eliminar"
        class="btn btn-danger"
    >
        eliminar
    </button>
</div>






    </div>
   
</div>



    </form>



</div>

<div class="col-md-7">
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CARGO</th>
                    <th scope="col">NOMBRE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listaCargo as $cargo){ ?>

                <tr>

                    <td ><?php echo $cargo['id']; ?> </td>
                    <td > <?php echo $cargo['nombre_cargo']; ?> </td>
                    <td >
                        <form action="" method="post">


<input type="hidden" name="id" id="id" value="<?php echo $cargo['id']; ?>"/>
<input type="submit" value="Seleccionar" name="accion" class="btn btn-info">

                        </form>
                
                </td>
                </tr>
                <?php   } ?>
           
            </tbody>
        </table>
    </div>
    
</div>



<?php include('../interfaces/pie.php'); ?>