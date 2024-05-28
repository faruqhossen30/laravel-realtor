<?php

namespace App\Http\Controllers\Admin\Package;

use App\Http\Controllers\Controller;
use App\Models\Package\Package;
use App\Models\Package\Package_service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::latest()->paginate();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request()->all();
        $request->validate([
            'name' => 'required'
        ]);

        $data = [
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'price'      => $request->price,

        ];
        $servicename = Package::create($data);
        $service     = $request->service;
        $status      = $request->status;

        if (!empty($request->service)) {
            foreach ($request->service as  $index => $service) {
                Package_service::create([
                    'package_id' => $servicename->id,
                    'service'    => $service,
                    'status'     => $status[$index]
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('package.index')->with('create', ' Package Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::with('service')->where('id', $id)->first();
        // return $package;
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        // return $request->all();
        $data = [
            'name'  => $request->name,
            'slug'  => Str::slug($request->name),
            'price' => $request->price,
        ];
        $servicename = Package::firstwhere('id', $id)->update($data);
        $service     = $request->service;
        $status      = $request->status;


        // return $status;
        if (!empty($request->service)) {
            Package_service::where('package_id', $id)->delete();
            foreach ($request->service as  $index => $service) {
                Package_service::create([
                    'package_id' => $id,
                    'service'    => $service,
                    'status'     => $status[$index]
                ]);
            }
        }


        Session::flash('warning');
        return redirect()->route('package.index')->with('warning', ' package Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Package::where('id', $id)->delete();
        return redirect()->route('package.index');
    }
}
