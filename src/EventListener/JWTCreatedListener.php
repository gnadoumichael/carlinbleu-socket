<?php

namespace App\EventListener;

use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\User\UserInterface;
class JWTCreatedListener
{
    /**
     * @param AuthenticationSuccessEvent $event
     */
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event): void
    {
        $data = $event->getData();
        $user = $event->getUser();

        if (!$user instanceof UserInterface) {
            return;
        }

        if ($user instanceof User) {
            $data['user'] = array(
                'id'        => $user->getId(),
                'nom'     => $user->getNom(),
                'prenoms'     => $user->getPrenoms(),
                'username'     => $user->getUserIdentifier(),
                "isverified" => $user->isVerified(),
                "roles" => $user->getRoles(),
                "compte" => $user->getCompte(),
                'societe'     => $user->getSociete(),
                'contribuable'     => $user->getContribuable(),
                'status'     => $user->getStatus(),
                'photo'     => $user->getPhoto(),
            );
        }

        $event->setData($data);
    }
}

