<?php 

//INSERT INTO `cargo` (`id`, `nombre_cargo`) VALUES (NULL, 'administrador');
 include_once '../setting/bd.php';
$conexionBD=BD::crearInstancia();


$id=isset($_POST['id'])?$_POST['id']:'';
$cargo=isset($_POST['cargo'])?$_POST['cargo']:'';
$accion=isset($_POST['accion'])?$_POST['accion']:'';

//print_r($_POST);

if($accion!=''){
    switch($accion){
        case 'agregar':
            $sql="INSERT INTO cargo(id,nombre_cargo) values(NULL,:cargo)";
            $consulta=$conexionBD->prepare($sql);
            $consulta-> bindParam(':cargo',$cargo);
            $consulta-> execute();
            
            //echo $sql;

            //$conexionBD->ejecutarConsulta($sql);
            break;

            case 'actualizar':
                $sql="UPDATE cargo SET nombre_cargo =:nombre_cargo WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta-> bindParam(':id',$id);
                $consulta-> bindParam(':nombre_cargo',$cargo);
                $consulta-> execute();
                //echo $sql; 
                break;

                case'eliminar':
                    $sql="DELETE FROM cargo WHERE id=:id";
                    $consulta=$conexionBD->prepare($sql);
                    $consulta-> bindParam(':id',$id);
                    $consulta-> execute();
                    //echo $sql;
                    break;

                    case'seleccionar':
                        $sql= "SELECT * FROM cargo WHERE id=:id";
                        $consulta=$conexionBD->prepare($sql);
                        $consulta-> bindParam(':id',$id);
                        $consulta-> execute();
                        $cargo=$consulta-> fetch(PDO::FETCH_ASSOC);
                        $nombre_cargo=$cargo['nombre_cargo'];
                        
                        //print_r($cargo);
                        break;
    }
}

//print_r($_POST);


//echo $cargo;

$consulta=$conexionBD->prepare("SELECT * FROM cargo");
$consulta->execute();
$listaCargo=$consulta->fetchALL();

//print_r($listaCargo);
?>


