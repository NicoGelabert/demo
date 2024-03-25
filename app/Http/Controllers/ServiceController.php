<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', [
            'services' => $services
        ]);
    }

    public function view(Service $services)
    {
        return view(
            'services.view', ['services' => $services]);
    }
}
