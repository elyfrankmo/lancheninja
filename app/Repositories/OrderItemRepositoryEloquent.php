<?php

namespace LancheNinja\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LancheNinja\Repositories\OrderItemRepository;
use LancheNinja\Models\OrderItem;
use LancheNinja\Validators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent
 * @package namespace LancheNinja\Repositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
