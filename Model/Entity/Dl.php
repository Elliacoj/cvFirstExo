<?php

namespace App\Model\Entity;

class Dl {
    private ?int $id;
    private ?string $contentDt;
    private ?string $contentDD;

    /**
     * DL constructor.
     * @param int|null $id
     * @param string|null $contentDt
     * @param string|null $contentDD
     */
    public function __construct(int $id = null, string $contentDt = null, string $contentDD = null)
    {
        $this->id = $id;
        $this->contentDt = $contentDt;
        $this->contentDD = $contentDD;
    }

    /**
     * Return the id of Dl
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Return the content dt of Dl
     * @return string|null
     */
    public function getContentDt(): ?string
    {
        return $this->contentDt;
    }

    /**
     * Set the content dt of Dl
     * @param string|null $contentDt
     */
    public function setContentDt(?string $contentDt): Dl
    {
        $this->contentDt = $contentDt;
        return $this;
    }

    /**
     * Return the content dd of Dl
     * @return string|null
     */
    public function getContentDD(): ?string
    {
        return $this->contentDD;
    }

    /**
     * Set the content dd of Dl
     * @param string|null $contentDD
     */
    public function setContentDD(?string $contentDD): Dl
    {
        $this->contentDD = $contentDD;
        return $this;
    }
}