<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pelicula
 *
 * @ORM\Table(name="pelicula")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PeliculaRepository")
 */
class Pelicula
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sinopsis", type="string", length=255, nullable=true )
     */
    private $sinopsis;
    /**
     * @var string
     *
     * @ORM\Column(name="duracion", type="string", length=30, nullable=true  )
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=50, nullable=true )
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="calidad", type="string", length=10, nullable=true )
     */
    private $calidad;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=50, nullable=true )
     */
    private $idioma;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaLanzamiento", type="date", nullable=true)
     */
    private $fechaLanzamiento;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Pelicula
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set sinopsis
     *
     * @param string $sinopsis
     *
     * @return Pelicula
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;

        return $this;
    }

    /**
     * Get sinopsis
     *
     * @return string
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     *
     * @return Pelicula
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return Pelicula
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set calidad
     *
     * @param string $calidad
     *
     * @return Pelicula
     */
    public function setCalidad($calidad)
    {
        $this->calidad = $calidad;

        return $this;
    }

    /**
     * Get calidad
     *
     * @return string
     */
    public function getCalidad()
    {
        return $this->calidad;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     *
     * @return Pelicula
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set fechaLanzamiento
     *
     * @param \DateTime $fechaLanzamiento
     *
     * @return Pelicula
     */
    public function setFechaLanzamiento($fechaLanzamiento)
    {
        $this->fechaLanzamiento = $fechaLanzamiento;

        return $this;
    }

    /**
     * Get fechaLanzamiento
     *
     * @return \DateTime
     */
    public function getFechaLanzamiento()
    {
        return $this->fechaLanzamiento;
    }
}
