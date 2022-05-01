<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\ProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop_index")
     */
    public function index(ProductsRepository $productRepository)
    {
        return $this->render('shop/index.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }
}
