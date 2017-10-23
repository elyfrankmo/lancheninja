<?php

namespace LancheNinja\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use LancheNinja\Repositories\CategoryRepository;
use LancheNinja\Models\Category;
use LancheNinja\Validators\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace LancheNinja\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
