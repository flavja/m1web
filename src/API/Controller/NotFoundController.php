<?php


namespace App\API\Controller;


class NotFoundController extends AbstractController
{
    public function index(array $uriVars = [])
    {
        $this->render('not-found/index');
    }
}
