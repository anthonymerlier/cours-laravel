<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        // dd($services);
        // return view('services.index', [ "services" => $services ]);
        return $services;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("services.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate( [
            "title" => [ "required", "min:3", "max:100", "unique:services", Rule::notIn(['create', 'store']), ],
            "content" => [ "required" ]
        ] );

        $service = new Service;
        $service->title = $request->title;
        $service->slug = Str::slug($service->title);
        $service->content = $request->content;
        // dd($service);
        $service->save();

        return redirect()->route("servicespage");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $service = Service::where("slug", $slug)->firstOrFail();
        return view("services.show", [ 
            "service" => $service 
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(string $slug)
    {
        $service = Service::where("slug", $slug)->firstOrFail();
        return view("services.edit", [ 
            "service" => $service 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $slug)
    {
        $request->validate( [
            "title" => [ "required", "min:3", "max:100", Rule::notIn(['create', 'store']), ],
            "content" => [ "required" ]
        ] );

        $service = Service::where("slug", $slug)->firstOrFail();

        // Pas besoin d'un nouveau service puisque modifie un existant
        // $service = new Service;
        $service->title = $request->title;
        $service->content = $request->content;
        $service->save();

        return redirect()->route("servicepage", $slug);
        // dd($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $slug)
    {
        // On récupère le service conerné,
        $service = Service::where("slug", $slug)->firstOrFail();
        // On lance la suppression
        $service->delete();

        return redirect()->route("servicespage");
    }
}
