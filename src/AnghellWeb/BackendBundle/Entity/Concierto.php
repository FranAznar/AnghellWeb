<?php

namespace AnghellWeb\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concierto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Concierto
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
     *
     * @ORM\Column(name="cartel", type="string", length=255)
     */
    private $cartel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="bandas", type="string", length=255)
     */
    private $bandas;


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
     * Set cartel
     *
     * @param string $cartel
     * @return Concierto
     */
    public function setCartel($cartel)
    {
        $this->cartel = $cartel;

        return $this;
    }

    /**
     * Get cartel
     *
     * @return string 
     */
    public function getCartel()
    {
        return $this->cartel;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Concierto
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
     * Set precio
     *
     * @param integer $precio
     * @return Concierto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Concierto
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Concierto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set bandas
     *
     * @param string $bandas
     * @return Concierto
     */
    public function setBandas($bandas)
    {
        $this->bandas = $bandas;

        return $this;
    }

    /**
     * Get bandas
     *
     * @return string 
     */
    public function getBandas()
    {
        return $this->bandas;
    }
}
