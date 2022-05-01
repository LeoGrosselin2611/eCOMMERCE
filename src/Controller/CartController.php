<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="app_cart_removed")
     */
    public function index(SessionInterface $session, ProductsRepository $productsRepository): Response
    {
        $cart = $session->get('cart', []);

        $cartWithData = [];

        foreach ($cart as $id => $quantity){
            $cartWithData[] = [
                'product' => $productsRepository->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach ($cartWithData as $item){
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'items' => $cartWithData,
            'total' => $total
        ]);
    }

    // /**
    // * @Route("/api/carts/validate", name="app_cart_validate")
    // */
    /* public function validate(SessionInterface $session, ProductsRepository $productsRepository): Response
    {
        $cart = $session->get('cart', []);

        $cartWithData = [];

        foreach ($cart as $id => $quantity){
            $cartWithData[] = [
                'product' => $productsRepository->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach ($cartWithData as $item) {
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;
        }

        $order = new Orders();

        $order->setTotalPrice($total);
        $order->setCreationDate(new \DateTime());

    } */

    /**
     * @Route("/cart/add/{id}", name="cart_add")
     * @return void
     */
    public function add($id, SessionInterface $session): RedirectResponse
    {
        $cart = $session->get('cart', []);

        if(!empty($cart[$id])){
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $session->set('cart', $cart);

        return $this->redirectToRoute("shop_index");
    }

    /**
     * @Route("/cart/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session){
        $cart = $session->get('cart',[]);

        if(!empty($cart[$id])){
            unset($cart[$id]);
        }

        $session->set('cart', $cart);

        return $this->redirectToRoute("app_cart");
    }
}
