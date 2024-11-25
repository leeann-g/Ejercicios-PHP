<?php
class Libro {

    public string $titulo;
    public string $autor;
    public int $anioPublicacion;
    public bool $disponible;

    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->disponible = true; 
    }

    public function prestarLibro() {
        if ($this->disponible) {
            $this->disponible = false;
            echo "El libro '{$this->titulo}' ha sido prestado.\n";
        } else {
            echo "El libro '{$this->titulo}' ya está prestado.\n";
        }
    }

    public function devolverLibro() {
        if (!$this->disponible) {
            $this->disponible = true;
            echo "El libro '{$this->titulo}' ha sido devuelto.\n";
        } else {
            echo "El libro '{$this->titulo}' ya estaba disponible.\n";
        }
    }

    public function mostrarInformacion() {
        $estado = $this->disponible ? "Disponible" : "No disponible";
        echo "Título: {$this->titulo}\n";
        echo "Autor: {$this->autor}\n";
        echo "Año de Publicación: {$this->anioPublicacion}\n";
        echo "Estado: {$estado}\n";
    }
}

$libro1 = new Libro("Cien años de soledad", "Gabriel García Márquez", 1967);
$libro2 = new Libro("1984", "George Orwell", 1949);
$libro3 = new Libro("El principito", "Antoine de Saint-Exupéry", 1943);


echo "Información de los libros:\n";
$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
$libro3->mostrarInformacion();

echo "\n";


echo "Prestando libros:\n";
$libro1->prestarLibro(); 
$libro1->prestarLibro(); 

echo "\n";


echo "Devolviendo libros:\n";
$libro1->devolverLibro(); 
$libro1->mostrarInformacion(); 

echo "\n";

echo "Uso de todos los métodos con otro libro:\n";
$libro2->mostrarInformacion();
$libro2->prestarLibro();
$libro2->mostrarInformacion();
$libro2->devolverLibro();
$libro2->mostrarInformacion();
?>