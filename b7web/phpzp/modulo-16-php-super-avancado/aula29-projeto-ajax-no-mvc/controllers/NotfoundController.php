<?php


class NotfoundController extends Controller
{
    public function index()
    {
        $this->loadViewInTemplate('404', []);
    }
}