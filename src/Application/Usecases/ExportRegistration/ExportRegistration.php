<?php

declare(strict_types=1);

namespace App\Application\Usecases\ExportRegistration;

use App\Domain\Repositories\LoadRegistrationRepository;
use App\Domain\ValuesObject\Cpf;
use DateTime;

final class ExportRegistration
{

    private LoadRegistrationRepository $repository;

    public function __construct(LoadRegistrationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(InputBoundary $input): OutputBoundary
    {
        $cpf = new Cpf($input->getCpf());
        $registration = $this->repository->loadByCpf($cpf);

        return new OutputBoundary([
            'name'           => $registration->getName(),
            'cpf'            => (string)$registration->getCpf(),
            'email'          => (string)$registration->getEmail(),
            'birdDate'       => $registration->getBirdDate()->format(DateTime::ATOM),
            'registrationAt' => $registration->getRegistrationAt()->format(DateTime::ATOM),
        ]);
    }
}
