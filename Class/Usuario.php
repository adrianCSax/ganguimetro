<?php

namespace Class\Usuario;

class Usuario {

    public function __construct(
        private int $idUsuario,
        private string $username,
        private string $nombre,
        private string $apellido,
        private string $password,
        private string $email,
        private bool $esAdmin
    ) {}

    /**
     * Get the value of idUsuario
     */
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get the value of username
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of esAdmin
     */
    public function getEsAdmin() {
        return $this->esAdmin;
    }

    /**
     * Set the value of esAdmin
     *
     * @return  self
     */
    public function setEsAdmin($esAdmin) {
        $this->esAdmin = $esAdmin;

        return $this;
    }
}
