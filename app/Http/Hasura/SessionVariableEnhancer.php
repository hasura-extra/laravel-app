<?php

namespace App\Http\Hasura;

use Hasura\AuthHook\SessionVariableEnhancerInterface;
use Psr\Http\Message\ServerRequestInterface;

class SessionVariableEnhancer implements SessionVariableEnhancerInterface
{
    public function enhance(array $sessionVariables, ServerRequestInterface $request): array
    {
        if ($user = auth()->user()) {
            $sessionVariables['x-hasura-user-id'] = (string)$user->getAuthIdentifier();
        }

        return $sessionVariables;
    }
}
