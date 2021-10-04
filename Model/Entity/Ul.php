<?php

namespace App\Model\Entity;

class Ul {
    private ?int $id;
    private ?string $content;

    /**
     * Ul constructor.
     * @param int|null $id
     * @param string|null $content
     */
    public function __construct(int $id = null, string $content = null)
    {
        $this->id = $id;
        $this->content = $content;
    }

    /**
     * Return the id of Ul
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Return the content of Ul
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Set the content of Ul
     * @param string|null $content
     * @return Ul
     */
    public function setContent(?string $content): Ul
    {
        $this->content = $content;
        return $this;
    }
}