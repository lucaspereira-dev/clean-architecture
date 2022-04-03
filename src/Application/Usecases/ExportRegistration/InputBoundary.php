<?php

declare(strict_types=1);

namespace App\Application\Usecases\ExportRegistration;

final class InputBoundary
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }


    /**
     * Get the value of cpf
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }
}
