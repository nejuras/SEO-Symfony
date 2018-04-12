<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeoController extends Controller
{
    /**
     * @Route("/studentai", name="studentai")
     */
    public function index()
    {
        $url = "/var/www/html/wish-a-gift/public/json/data.json";

        $json = file_get_contents($url);
        $data = json_decode($json, true);

        return $this->render('seo/index.html.twig', [
            'title' => 'Studentai',
            'data' => $data
        ]);
    }

    /**
     * @Route("/akademija", name="akademija")
     */
    public function akademija(Request $request)
    {

        $utm_campaign = $request->get('utm_campaign');
        $utm_term = $request->get('utm_term');
        $utm_content = $request->get('utm_content');

        $url = "/var/www/html/wish-a-gift/public/json/data.json";

        $json = file_get_contents($url);
        $data = json_decode($json, true);

        return $this->render('seo/vertinimas.html.twig', [
            'title' => 'Akademija',
            'utm_campaign' => $utm_campaign,
            'utm_term' => $utm_term,
            'utm_content' => $utm_content,
            'data' => $data
        ]);
    }


}
