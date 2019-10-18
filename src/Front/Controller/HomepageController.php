<?php

namespace App\Front\Controller;

class HomepageController extends AbstractController
{
    public function index(array $uriVars = [])
    {
        $date = new \DateTime();

        $this->render('homepage/index',[
            'id'=> $uriVars['id'],
            'date' => $date->format('d/m/Y')
        ]);
    }

}
