<?php

namespace LancheNinja\Http\Controllers;

use Illuminate\Http\Request;
use LancheNinja\Http\Requests\AdminCategoryRequest;
use LancheNinja\Repositories\CategoryRepository;

class CategoriesController extends Controller
{

    /**
     * @var CategoryRepository
     */
    private $repository;

    /**
     * CategoriesController constructor.
     * @param CategoryRepository $repository
     */
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        $categories = $this->repository->paginate(5);


        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AdminCategoryRequest $request)
    {

        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.categories.index');

    }

    public function edit($id)
    {

        $category = $this->repository->find($id);

        return view('admin.categories.edit',compact('category'));

    }

    public function update(AdminCategoryRequest $request,$id)
    {

        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.categories.index');

    }
}
