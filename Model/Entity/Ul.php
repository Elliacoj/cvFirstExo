<?php

namespace App\Model\Entity;

class Ul {
    private ?int $id;
    private ?string $content;
    private ?int $ul;

    /**
     * Ul constructor.
     * @param int|null $id
     * @param string|null $content
     * @param int|null $ul
     */
    public function __construct(int $id = null, string $content = null, int $ul = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->ul = $ul;
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

    /**
     * Return the ul of Ul
     * @return int|null
     */
    public function getUl(): ?int
    {
        return $this->ul;
    }

    /**
     * Set the ul of Ul
     * @param int|null $ul
     */
    public function setUl(?int $ul): Ul
    {
        $this->ul = $ul;
        return $this;
    }
}