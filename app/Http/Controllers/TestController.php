<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index(): string
    {
        return 'azaza';
    }

    public function test(): int
    {
        return 19;
    }
}
