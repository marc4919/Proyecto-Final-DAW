<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AudioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AudioRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Audio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $Descripcion;

    #[ORM\Column(type: 'string', length: 20)]
    private $Tipo;

    #[ORM\Column(type: 'string', length: 255)]
    private $Enlace;

    #[ORM\ManyToOne(targetEntity: Musical::class, inversedBy: 'audios')]
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

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(string $Tipo): self
    {
        $this->Tipo = $Tipo;

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
