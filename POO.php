<?php

class Persona {
    // public string|null|int $nombre = null;
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string{
        return $this->nombre;
    }

    public function setNombre(string $valor): void {
        $this->nombre = $valor;
    }
}

$persona = new Persona("Pepe");
// $persona->nombre = "Pepe";

echo $persona->getNombre();