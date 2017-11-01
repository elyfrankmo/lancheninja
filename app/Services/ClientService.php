<?php
namespace LancheNinja\Services;

use LancheNinja\Repositories\ClientRepository;
use LancheNinja\Repositories\UserRepository;

class ClientService
{

    /**
     * @var ClientRepository $clientRepository
     */
    private $clientRepository;

    /**
     * @var UserRepository $userRepository
     */
    private $userRepository;

    /**
     * ClientService constructor.
     * @param ClientRepository $clientRepository
     * @param UserRepository $userRepository
     */
    public function __construct(ClientRepository $clientRepository,UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->clientRepository = $clientRepository;
    }

    public function update(array $data,$id)
    {
        $this->clientRepository->update($data,$id);

        $userId = $this->clientRepository->find($id)->user_id;

        $this->userRepository->update($data['user'],$userId);
    }

    public function create(array $data)
    {
        $data['user']['password'] = bcrypt(123456);
        $user = $this->userRepository->create($data['user']);

        $data['user_id'] = $user->id;
        $this->clientRepository->create($data);
    }

}