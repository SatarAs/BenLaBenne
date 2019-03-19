<?php


namespace App\Security;


use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Authenticator;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class AuthenticatorProvider implements UserProviderInterface
{
    private $entityManager;

    /**
     * UserProvider constructor.
     * @param EntityManagerInterface $entityManager
     * @internal param Client $httpClient
     * @internal param UserOptionService $userOptionService
     * @internal param ProjectService $projectService
     * @internal param SessionService $sessionService
     * @internal param Session $session
     * @internal param UserOptionService $userOptionsService
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function loadUserByUsername($username)
    {
        return $this->entityManager->createQueryBuilder('u')
            ->where('u.email = :email')
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @param UserInterface $user
     * @return UserInterface
     *
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof Authenticator) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }
        return $user;
    }

    /**
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        return $class === 'App\Security\User';
    }
}