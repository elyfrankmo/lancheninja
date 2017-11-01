<?php
namespace LancheNinja\Services;

use LancheNinja\Repositories\ClientRepository;
use LancheNinja\Repositories\UserRepository;

class CLientService
{

    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    /**
     * @var ClientRepository $clientRepository
     */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepository,UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;

    }

    public function save (array $data)
    {

        $this->clientRepository->create($data);

    }

}