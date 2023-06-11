<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $post_title = null;

    #[ORM\Column(length: 1000)]
    private ?string $post_content = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostTitle(): ?string
    {
        return $this->post_title;
    }

    public function setPostTitle(string $post_title): static
    {
        $this->post_title = $post_title;

        return $this;
    }

    public function getPostContent(): ?string
    {
        return $this->post_content;
    }

    public function setPostContent(string $post_content): static
    {
        $this->post_content = $post_content;

        return $this;
    }
}
