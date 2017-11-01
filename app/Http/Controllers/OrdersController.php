<?php

namespace LancheNinja\Http\Controllers;

use Illuminate\Http\Request;
use LancheNinja\Http\Requests\AdminCategoryRequest;
use LancheNinja\Repositories\CategoryRepository;
use LancheNinja\Repositories\OrderRepository;
use LancheNinja\Repositories\UserRepository;

class OrdersController extends Controller
{

    /**
     * @var OrdersController
     */
    private $repository;

    /**
     * OrdersController constructor.
     * @param OrderRepository $repository
     */
    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate(5);
        return view('admin.orders.index',compact('orders'));
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

    public function edit($id,UserRepository $userRepository)
    {
        $deliveryman = $userRepository->pluck('name','id');

        $list_status = array(
            '0'=> 'Pendente',
            '1'=> 'A caminho',
            '2'=> 'Entregue',
        );

        $order = $this->repository->find($id);
        return view('admin.orders.edit',compact('order','list_status','deliveryman'));

    }

    public function update(AdminCategoryRequest $request,$id)
    {

        $data = $request->all();
        $this->repository->update($data,$id);

        return redirect()->route('admin.categories.index');

    }
}
