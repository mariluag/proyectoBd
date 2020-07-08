<?php

namespace consultas_sql;
use funciones\mysqlfunciones;
 class consultas{

public function categorias(){
    $qry = 'SELECT * FROM categorias';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    

}
public function usr(){
    $qry = 'SELECT * FROM usuarios';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    

}

public function editUsr($id){
    $qry = 'SELECT * FROM usuarios
    WHERE id_usuario='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function tb($id){
    $qry = 'SELECT * FROM tabla_blog
    WHERE id='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function idCategorias($id){
    $qry = 'SELECT * FROM categorias
    WHERE id_categoria='.$id;
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}
public function ljblog(){
    $qry="select s.*, c.nombre as nombre_categoria
    from tabla_blog s 
    left join categorias c on c.id_categoria = s.categoria";
    $base = new mysqlfunciones();
    $res = $base->ejecutar($qry);
    return $res; 
}

public function getCategorias(){
    $qry = 'SELECT * FROM categorias';
    $rt = new mysqlfunciones;
    $res = $rt->ejecutar($qry);
    return $res;
    
}

 }


?>