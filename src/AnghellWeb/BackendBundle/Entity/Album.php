<?php

namespace AnghellWeb\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AnghellWeb\BackendBundle\Entity\Cancion;

/**
 * Album
 * @ORM\Table(name="Album")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="titulo", type="string", length=255)¡
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="portada", type="string", length=255)
     */
    private $portada;

    /**
     * @var string
     *
     * @ORM\Column(name="descarga", type="string", length=255)
     */
    private $descarga;

    /**
     * @ORM\ManyToOne(targetEntity="AnghellWeb\BackendBundle\Entity\Cancion")
     */
    private $cancion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Album
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Album
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set portada
     *
     * @param string $portada
     * @return Album
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return string 
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set descarga
     *
     * @param string $descarga
     * @return Album
     */
    public function setDescarga($descarga)
    {
        $this->descarga = $descarga;

        return $this;
    }

    /**
     * Get descarga
     *
     * @return string 
     */
    public function getDescarga()
    {
        return $this->descarga;
    }

    /**
     * Set cancion
     *
     * @param string $cancion
     * @return Album
     */
    public function setCancion($cancion)
    {
        $this->cancion = $cancion;

        return $this;
    }

    /**
     * Get cancion
     *
     * @return string 
     */
    public function cancion()
    {
        return $this->cancion;
    }
}
