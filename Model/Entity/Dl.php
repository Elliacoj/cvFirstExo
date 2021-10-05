<?php

namespace App\Model\Entity;

class Dl {
    private ?int $id;
    private ?string $contentDt;
    private ?string $contentDd;
    private ?int $dl;

    /**
     * DL constructor.
     * @param int|null $id
     * @param string|null $contentDt
     * @param string|null $contentDd
     * @param int|null $dl
     */
    public function __construct(int $id = null, string $contentDt = null, string $contentDd = null, int $dl = null)
    {
        $this->id = $id;
        $this->contentDt = $contentDt;
        $this->contentDd = $contentDd;
        $this->dl = $dl;
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
     * @return Dl
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
    public function getContentDd(): ?string
    {
        return $this->contentDd;
    }

    /**
     * Set the content dd of Dl
     * @param string|null $contentDd
     * @return Dl
     */
    public function setContentDd(?string $contentDd): Dl
    {
        $this->contentDd = $contentDd;
        return $this;
    }

    /**
     * Return dl of Dl
     * @return int|null
     */
    public function getDl(): ?int
    {
        return $this->dl;
    }

    /**
     * Set dl of Dl
     * @param int|null $dl
     * @return Dl
     */
    public function setDl(?int $dl): Dl
    {
        $this->dl = $dl;
        return $this;
    }
}