<?php

declare(strict_types=1);

/*
 * This file is part of the package t3g/elts-satis.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route(path: '/', name: 'index', methods: ['GET'])]
    public function indexAction(Request $request): Response
    {
        dump($request->getQueryString());
        $url = $this->generateUrl('index', [
            'foo' => 'bar;baz'
        ]);
        return new Response(
            '<html><head><title>Foo</title></head><body><a href="' . $url . '">Click me</a></body></html>'
        );
    }
}
