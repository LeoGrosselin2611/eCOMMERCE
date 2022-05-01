<?php

namespace App\Controller;

use App\Repository\OrdersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/api", name="app_orders")
     */
    public function index(OrdersRepository $repository): Response

    {
        $orders = $orders->findAll();

        return $this->render('orders/index.html.twig', [
            'orders' => $orders
        ]);
    }
}
