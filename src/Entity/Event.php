<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $event_name = null;

    #[ORM\Column(length: 500)]
    private ?string $event_desctription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): static
    {
        $this->event_name = $event_name;

        return $this;
    }

    public function getEventDesctription(): ?string
    {
        return $this->event_desctription;
    }

    public function setEventDesctription(string $event_desctription): static
    {
        $this->event_desctription = $event_desctription;

        return $this;
    }
}
