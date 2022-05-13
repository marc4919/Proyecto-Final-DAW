<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MusicalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusicalRepository::class)]
#[ApiResource]
class Musical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $Nombre;

    #[ORM\Column(type: 'string', length: 255)]
    private $Sinopsis;

    #[ORM\Column(type: 'string', length: 255)]
    private $Cartel;

    #[ORM\Column(type: 'string', length: 20)]
    private $Anyo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Video;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getSinopsis(): ?string
    {
        return $this->Sinopsis;
    }

    public function setSinopsis(string $Sinopsis): self
    {
        $this->Sinopsis = $Sinopsis;

        return $this;
    }

    public function getCartel(): ?string
    {
        return $this->Cartel;
    }

    public function setCartel(string $Cartel): self
    {
        $this->Cartel = $Cartel;

        return $this;
    }

    public function getAnyo(): ?string
    {
        return $this->Anyo;
    }

    public function setAnyo(string $Anyo): self
    {
        $this->Anyo = $Anyo;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->Video;
    }

    public function setVideo(?string $Video): self
    {
        $this->Video = $Video;

        return $this;
    }
}
