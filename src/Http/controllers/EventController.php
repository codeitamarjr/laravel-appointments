<?php

namespace Codeitamarjr\LaravelAppointments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello from EventController!']);
    }
}
