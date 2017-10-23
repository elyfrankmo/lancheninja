<?php

namespace LancheNinja\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LancheNinja\Repositories\OrderRepository;
use LancheNinja\Models\Order;
use LancheNinja\Validators\OrderValidator;

/**
 * Class OrderRepositoryEloquent
 * @package namespace LancheNinja\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
