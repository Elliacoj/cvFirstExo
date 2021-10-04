<?php

namespace App\Model\Entity;

class Section {
    private ?int $id;
    private ?string $content;
    private ?int $section;
    private ?int $page;

    /**
     * Section constructor.
     * @param int|null $id
     * @param string|null $content
     * @param int|null $section
     * @param int|null $page
     */
    public function __construct(int $id = null, string $content = null, int $section = null, int $page = null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->section = $section;
        $this->page = $page;
    }

    /**
     * Return the id of Section
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Return the content of Section
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Set the content of Section
     * @param string|null $content
     * @return Section
     */
    public function setContent(?string $content): Section
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Return the section fo Section
     * @return int|null
     */
    public function getSection(): ?int
    {
        return $this->section;
    }

    /**
     * Set the section of Section
     * @param int|null $section
     * @return Section
     */
    public function setSection(?int $section): Section
    {
        $this->section = $section;
        return $this;
    }

    /**
     * Return the page of Section
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Set the page of Section
     * @param int|null $page
     * @return Section
     */
    public function setPage(?int $page): Section
    {
        $this->page = $page;
        return $this;
    }
}