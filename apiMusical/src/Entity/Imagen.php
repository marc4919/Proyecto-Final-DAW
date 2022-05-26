<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ImagenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagenRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Imagen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $Descripcion;

    #[ORM\Column(type: 'string', length: 50)]
    private $Enlace;

    #[ORM\ManyToOne(targetEntity: Musical::class, inversedBy: 'imagenes')]
    private $musical;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }

    public function setDescripcion(string $Descripcion): self
    {
        $this->Descripcion = $Descripcion;

        return $this;
    }

    public function getEnlace(): ?string
    {
        return $this->Enlace;
    }

    public function setEnlace(string $Enlace): self
    {
        $this->Enlace = $Enlace;

        return $this;
    }

    public function getMusical(): ?Musical
    {
        return $this->musical;
    }

    public function setMusical(?Musical $musical): self
    {
        $this->musical = $musical;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }
}
