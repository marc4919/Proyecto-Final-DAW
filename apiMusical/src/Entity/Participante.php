<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ParticipanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipanteRepository::class)]
#[ApiResource]
class Participante
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $Nombre;

    #[ORM\Column(type: 'string', length: 50)]
    private $Apellidos;

    #[ORM\ManyToMany(targetEntity: Musical::class, mappedBy: 'participantes')]
    private $musicals;

    public function __construct()
    {
        $this->musicals = new ArrayCollection();
    }

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

    public function getApellidos(): ?string
    {
        return $this->Apellidos;
    }

    public function setApellidos(string $Apellidos): self
    {
        $this->Apellidos = $Apellidos;

        return $this;
    }

    /**
     * @return Collection<int, Musical>
     */
    public function getMusicals(): Collection
    {
        return $this->musicals;
    }

    public function addMusical(Musical $musical): self
    {
        if (!$this->musicals->contains($musical)) {
            $this->musicals[] = $musical;
            $musical->addParticipante($this);
        }

        return $this;
    }

    public function removeMusical(Musical $musical): self
    {
        if ($this->musicals->removeElement($musical)) {
            $musical->removeParticipante($this);
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getNombre();
    }
}
