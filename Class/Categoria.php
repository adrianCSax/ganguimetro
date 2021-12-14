<?php

namespace Class\Categoria;

class Categoria {


    public function __construct(
        private int $id
    ) {}



    /**
     * Get the value of id
     */ 
    public function getId() {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
}