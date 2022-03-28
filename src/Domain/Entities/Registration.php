<?php

namespace App\Domain\Entities;

use App\Domain\ValuesObject\Email;
use App\Domain\ValuesObject\Cpf;
use \DateTimeInterface;

final class Registration
{
    private string $name;
    private Email $email;
    private Cpf $cpf;
    private DateTimeInterface $birdDate;
    private DateTimeInterface $registrationAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Registration
     */
    public function setName(string $name): Registration
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return Registration
     */
    public function setEmail(Email $email): Registration
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Cpf
     */
    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    /**
     * @param Cpf $cpf
     * @return Registration
     */
    public function setCpf(Cpf $cpf): Registration
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirdDate(): DateTimeInterface
    {
        return $this->birdDate;
    }

    /**
     * @param DateTimeInterface $birdDate
     * @return Registration
     */
    public function setBirdDate(DateTimeInterface $birdDate): Registration
    {
        $this->birdDate = $birdDate;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getRegistrationAt(): DateTimeInterface
    {
        return $this->registrationAt;
    }

    /**
     * @param DateTimeInterface $registrationAt
     * @return Registration
     */
    public function setRegistrationAt(DateTimeInterface $registrationAt): Registration
    {
        $this->registrationAt = $registrationAt;
        return $this;
    }


}