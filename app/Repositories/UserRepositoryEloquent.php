<?php

namespace LancheNinja\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LancheNinja\Repositories\UserRepository;
use LancheNinja\Models\User;
//use LancheNinja\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace LancheNinja\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
