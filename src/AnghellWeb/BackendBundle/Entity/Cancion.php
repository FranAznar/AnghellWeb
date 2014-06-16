<?php

namespace AnghellWeb\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AnghellWeb\BackendBundle\Entity\Album;

/**
 * Cancion
 *
 * @ORM\Table(name="Cancion")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Cancion
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer")
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=255)
     */
    private $letra;

    /**
     * @ORM\ManyToOne(targetEntity="AnghellWeb\BackendBundle\Entity\Album")
     */
    private $album;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * @return Cancion
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
     * Set duracion
     *
     * @param integer $duracion
     * @return Cancion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return Cancion
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set album
     *
     * @param string $album
     * @return Cancion
     */
    public function setAlbum($album)
    {
        $this->album = $album;

        return $this;
    }

    /**
     * Get album
     *
     * @return string 
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Cancion
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
