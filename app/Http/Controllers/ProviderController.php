<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Http\Requests\Provider\StoreRequest;
use App\Http\Requests\Provider\UpdateRequest;
use Illuminate\Support\Facades\Gate;

class ProviderController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('providers.index'),403);

        $providers = Provider::paginate(10);
        return view('admin.provider.index', compact('providers'));
    }


    public function create()
    {
        abort_if(Gate::denies('providers.create'),403);

        return view('admin.provider.create');
    }


    public function store(StoreRequest $request)
    {
        Provider::create($request->all());
        return redirect()->route('providers.index');
    }


    public function show(Provider $provider)
    {
        abort_if(Gate::denies('providers.show'),403);

        return view('admin.provider.show', compact('provider'));
    }


    public function edit(Provider $provider)
    {
        abort_if(Gate::denies('providers.edit'),403);

        return view('admin.provider.edit', compact('provider'));
    }



    public function update(UpdateRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect()->route('providers.index');
    }


    public function destroy(Provider $provider)
    {
        abort_if(Gate::denies('providers.destroy'),403);

        $provider->delete();
        return redirect()->route('providers.index');
    }
}
