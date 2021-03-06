<?php

namespace LancheNinja\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LancheNinja\Repositories\ClientRepository;
use LancheNinja\Models\Client;
use LancheNinja\Validators\ClientValidator;

/**
 * Class ClientRepositoryEloquent
 * @package namespace LancheNinja\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
