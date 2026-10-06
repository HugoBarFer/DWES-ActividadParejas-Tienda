<?php

class Orders{
    private $id;
    private $usuarioId;
    private $total;
    private $estado;
    private $createdAt;

    public function __construct($id,$usuarioId,$total,$estado,$createdAt){
        $this->id=$id;
        $this->usuarioId=$usuarioId;
        $this->total=$total;
        $this->estado=$estado;
        $this->createdAt=$createdAt;
    }
}

?>