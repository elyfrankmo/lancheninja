<?php

namespace LancheNinja\Http\Controllers;

use Illuminate\Http\Request;
use LancheNinja\Http\Requests\AdminClientRequest;
use LancheNinja\Repositories\ClientRepository;
use LancheNinja\Services\ClientService;

class ClientsController extends Controller
{

    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * @var ClientService $clientService
     */
    private $clientService;


    /**
     * ClientsController constructor.
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository,ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }

    public function index()
    {

        $clients = $this->repository->paginate(5);


        return view('admin.clients.index',compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AdminClientRequest $request)
    {

        $data = $request->all();
        $this->clientService->create($data);

        return redirect()->route('admin.clients.index');

    }

    public function edit($id)
    {

        $client = $this->repository->find($id);

        return view('admin.clients.edit',compact('client'));

    }

    public function update(AdminClientRequest $request,$id)
    {

        $data = $request->all();
        $this->clientService->update($data,$id);

        return redirect()->route('admin.clients.index');

    }
}
