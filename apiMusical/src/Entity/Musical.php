<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiProperty;
use App\Repository\MusicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusicalRepository::class)]
#[ApiResource(
    collectionOperations: ['get'],
    itemOperations: ['get'],
)]
class Musical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $Nombre;

    #[ORM\Column(type: 'text', length: 255)]
    private $Sinopsis;

    #[ORM\Column(type: 'string', length: 255)]
    private $Cartel;

    #[ORM\Column(type: 'string', length: 20)]
    private $Anyo;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Video;

    #[ORM\OneToMany(mappedBy: 'musical', targetEntity: Imagen::class)]
    private $imagenes;

    #[Groups("musical")]
    #[ApiProperty(readableLink: true, writableLink: true)]
    #[ORM\OneToMany(mappedBy: 'musical', targetEntity: Audio::class)]
    private $audios;

    #[ORM\ManyToMany(targetEntity: Participante::class, inversedBy: 'musicals')]
    private $participantes;

    public function __construct()
    {
        $this->imagenes = new ArrayCollection();
        $this->audios = new ArrayCollection();
        $this->participantes = new ArrayCollection();
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

    /**
     * @return Collection<int, Imagen>
     */
    public function getImagenes(): Collection
    {
        return $this->imagenes;
    }

    public function addImagene(Imagen $imagene): self
    {
        if (!$this->imagenes->contains($imagene)) {
            $this->imagenes[] = $imagene;
            $imagene->setMusical($this);
        }

        return $this;
    }

    public function removeImagene(Imagen $imagene): self
    {
        if ($this->imagenes->removeElement($imagene)) {
            // set the owning side to null (unless already changed)
            if ($imagene->getMusical() === $this) {
                $imagene->setMusical(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Audio>
     */
    public function getAudios(): Collection
    {
        return $this->audios;
    }

    public function addAudio(Audio $audio): self
    {
        if (!$this->audios->contains($audio)) {
            $this->audios[] = $audio;
            $audio->setMusical($this);
        }

        return $this;
    }

    public function removeAudio(Audio $audio): self
    {
        if ($this->audios->removeElement($audio)) {
            // set the owning side to null (unless already changed)
            if ($audio->getMusical() === $this) {
                $audio->setMusical(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Participante>
     */
    public function getParticipantes(): Collection
    {
        return $this->participantes;
    }

    public function addParticipante(Participante $participante): self
    {
        if (!$this->participantes->contains($participante)) {
            $this->participantes[] = $participante;
        }

        return $this;
    }

    public function removeParticipante(Participante $participante): self
    {
        $this->participantes->removeElement($participante);

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getNombre();
    }
}
