<?php

namespace UtenteDDDExample\Domain\Service\Utente;

use UtenteDDDExample\Domain\Model\Utente\Utente;

class SignUpUtente extends CreateUtente
{
    protected function createUtente(): Utente
    {
        $utente = Utente::create(
            $this->utenteRepository->nextIdentity(),
            $this->email,
            $this->hashedPassword,
            'user',
            $this->competenze
        );

        return $utente;
    }
}
