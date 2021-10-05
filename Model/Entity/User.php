<?php

namespace App\Model\Entity;

class User {
    private ?int $id;
    private ?string $username;
    private ?string $password;
    private ?string $role;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $username
     * @param string|null $password
     * @param string|null $role
     */
    public function __construct(int $id = null, string $username = null, string $password = null, string $role = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    /**
     * Return the id of User
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Return the username of User
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Set the username of User
     * @param string|null $username
     * @return User
     */
    public function setUsername(?string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Return the password of User
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set the password of User
     * @param string|null $password
     * @return User
     */
    public function setPassword(?string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Return the role of User
     * @return string|null
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Set the role of User
     * @param string|null $role
     * @return User
     */
    public function setRole(?string $role): User
    {
        $this->role = $role;
        return $this;
    }
}
