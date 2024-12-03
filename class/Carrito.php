<?php
class Carrito{
    /**Agregar producto */

    public function add_item(int $id_pelicula, int $cantidad = 1) {
        $itemData = (new Pelicula())->catalogoPorId($id_pelicula);
        if ($itemData) {
            if (isset($_SESSION["carrito"][$id_pelicula])) {
                $_SESSION["carrito"][$id_pelicula]["cantidad"] += $cantidad;
            } else {
                $_SESSION["carrito"][$id_pelicula] = [
                    "producto" => $itemData->getNombre(),
                    "portada" => $itemData->getImagen(),
                    "precio" => $itemData->getPrecio(),
                    "cantidad" => $cantidad
                ];
            }
        }
    }

    /**Mostrar productos */

    public function getCarrito(){
        if( !empty($_SESSION["carrito"]) ){
            return $_SESSION["carrito"];
        }
        return [];
    }

    
    /**Devolver el precio total */
    public function getTotal(){
        $total = 0;
        if( !empty($_SESSION["carrito"]) ){
            foreach( $_SESSION["carrito"] as $item ){
                $total += $item["precio"] * $item["cantidad"];
            }
        }
        return $total;
    }
    /**Vaciar carrito */
    public function vaciarCarrito(){
        $_SESSION["carrito"] = [];
    }
    /**Modificar Cantidad*/

    public function actualizarCantidades(array $cantidades){
        if( !empty($cantidades) ){
            foreach( $cantidades as $id => $cantidad ){
                if( isset( $_SESSION["carrito"][$id] ) ){
                    $_SESSION["carrito"][$id]["cantidad"] = $cantidad; 
                }
            }
        }
    }

    /**Eliminar item individual Cantidad*/
    public function removeItem(int $id){
        if( isset( $_SESSION["carrito"][$id] ) ){
            unset($_SESSION["carrito"][$id]);
            (new Alerta())->add_alerta("Producto eliminado", "success");
        }else{
            (new Alerta())->add_alerta("No se ha eliminado el producto", "danger");
        }
    }


    public function insert(int $id_pelicula, int $id_usuario, int $total, int $cantidad){
        try {
        $conexion = Conexion::getConexion();
            $query = "INSERT INTO `carrito` (`id`, `id_pelicula`, `id_usuario`, `total`) VALUES (NULL, :id_pelicula, :id_usuario, :total)";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->execute([
                "id_pelicula" => htmlspecialchars($id_pelicula),
                "id_usuario" => htmlspecialchars($id_usuario),
                "total" => htmlspecialchars($total),
                "cantidad" => htmlspecialchars($cantidad),
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function borrarCarritosAnteriores(){
        try {
        $conexion = Conexion::getConexion();
            $query = "DELETE FROM `carrito` WHERE id_usuario = :id_usuario";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->execute([
                "id_usuario" => htmlspecialchars($_SESSION["login"]["id"])
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }



    public function getHistorialCompras(int $id_usuario) {
        try {
            $conexion = Conexion::getConexion();
            $query = "
                SELECT carrito.id, peliculas.nombre, carrito.cantidad, carrito.total, peliculas.img
                FROM carrito
                INNER JOIN peliculas ON carrito.id_pelicula = peliculas.id
                WHERE carrito.id_usuario = :id_usuario
                ORDER BY carrito.id DESC
            ";
            $PDOStatement = $conexion->prepare($query);
            $PDOStatement->execute(['id_usuario' => $id_usuario]);
            return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }



    public function finalizarCompra(){
        if( isset($_SESSION["carrito"]) && isset($_SESSION["login"]) ){
            $id_usuario = $_SESSION["login"]["id"];
            $total = $this->getTotal();

            try {
                $conexion = Conexion::getConexion();
                
                $query = "INSERT INTO carrito (id_usuario, id_pelicula, total, cantidad) VALUES (:id_usuario, :id_pelicula, :total, :cantidad)";
                $PDOStatement = $conexion->prepare($query);
                foreach ($_SESSION["carrito"] as $id_pelicula => $producto) {
                    $PDOStatement->execute([
                        'id_pelicula' => htmlspecialchars($id_pelicula),
                        'id_usuario' => htmlspecialchars($id_usuario),
                        'total' => htmlspecialchars($total),
                        'cantidad' => $producto["cantidad"]
                    ]);
                }

                $id_compra = $conexion->lastInsertId();

                $this->vaciarCarrito();
                return true;

            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                return false;
            }
        }
    }


}
    
?>