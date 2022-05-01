<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * @ORM\OneToMany(targetEntity=OrderItem::class, mappedBy="orderRef", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity=OrderItem::class, mappedBy="orderRef")
     */
    private $orderItems;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getProducts(): ?Products
    {
        return $this->products;
    }

   // public function addProduct(OrderItem $item): self{}

   /**
    * @return Collection<int, OrderItem>
    */
   public function getOrderItems(): Collection
   {
       return $this->orderItems;
   }

   public function addOrderItem(OrderItem $orderItem): self
   {
       if (!$this->orderItems->contains($orderItem)) {
           $this->orderItems[] = $orderItem;
           $orderItem->setOrderRef($this);
       }

       return $this;
   }

   public function removeOrderItem(OrderItem $orderItem): self
   {
       if ($this->orderItems->removeElement($orderItem)) {
           // set the owning side to null (unless already changed)
           if ($orderItem->getOrderRef() === $this) {
               $orderItem->setOrderRef(null);
           }
       }

       return $this;
   }

}
