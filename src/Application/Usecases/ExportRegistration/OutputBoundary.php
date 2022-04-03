<?php

declare(strict_types=1);

namespace App\Application\Usecases\ExportRegistration;

final class OutputBoundary
{
    private string $name;
    private string $email;
    private string $cpf;
    private string $birdDate;
    private string $registrationAt;

    public function __construct(array $values)
    {
        $this->name             = $values['name'] ?? '';
        $this->email            = $values['email'] ?? '';
        $this->cpf              = $values['cpf'] ?? '';
        $this->birdDate         = $values['birdDate'] ?? '';
        $this->registrationAt   = $values['registrationAt'] ?? '';
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return OutputBoundary
     */ 
    public function setName($name): OutputBoundary
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return OutputBoundary
     */ 
    public function setEmail($email): OutputBoundary
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return OutputBoundary
     */ 
    public function setCpf($cpf): OutputBoundary
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of birdDate
     */ 
    public function getBirdDate(): string
    {
        return $this->birdDate;
    }

    /**
     * Set the value of birdDate
     *
     * @return OutputBoundary
     */ 
    public function setBirdDate($birdDate): OutputBoundary
    {
        $this->birdDate = $birdDate;

        return $this;
    }

    /**
     * Get the value of registrationAt
     */ 
    public function getRegistrationAt(): string
    {
        return $this->registrationAt;
    }

    /**
     * Set the value of registrationAt
     *
     * @return OutputBoundary
     */ 
    public function setRegistrationAt($registrationAt): OutputBoundary
    {
        $this->registrationAt = $registrationAt;

        return $this;
    }
}
