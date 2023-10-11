<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class ServiceController extends Controller
{
    private array $services = [
        0 => ['name' => 'rooshooee', 'price' => '25000', 'time' => 15],
        1 => ['name' => 'nezafatDakhel', 'price' => '30000', 'time' => 30],
        2 => ['name' => 'sefrShooee', 'price' => '80000', 'time' => 60],
    ];
    public function create()
    {
        return view('services.create', ['services' => $this->services]);
    }

    public function home()
    {
        return view('welcome');
    }

    public function store(CreateServiceRequest $request)
    {
        $validated = $request->validated();
        $code = uniqid();
        $validated['code'] = $code;
        Service::query()->create($validated);
        return redirect()->route('home')->with('success', $code)->with('services', $this->services);
    }

    public function rename()
    {
        return view('rename');
    }

    public function edit(Request $request)
    {
        $phone = $request->phone;
        $code = $request->code;
        $service = Service::query()->where([['code', $code], ['phone', $phone]])->first();
        if ($service) {
            return view('services.edit', ['service' => $service, 'services' => $this->services]);
        } else {
            echo "not service found";
        }
    }

    public function update(Service $service, UpdateServiceRequest $request)
    {
        $validated = $request->validated();
        $service->update($validated);
        return redirect()->route('home')->with('success', $service->code);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('home')->with('success', "your service by code $service->code has been deleted");
    }
}
