<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * ShoppingCart
 *
 * @ORM\Table(name="shopping_cart", indexes={@ORM\Index(name="shopping_cart_ibfk_1", columns={"user_id"}), @ORM\Index(name="shop_cart_ibfk_1", columns={"id_Product"})})
 * @ORM\Entity
 */
class ShoppingCart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cart", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCart;

    /**
     * @var int
     *@Assert\NotBlank(message="Le price est obligatoire")
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *  @Assert\NotBlank(message="Le nom est obligatoire")
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Produit
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Product", referencedColumnName="id_Produit")
     * })
     */
    private $idProduct;

    /**
     * @var \User
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id_User")
     * })
     */
    private $user;

    public function getIdCart(): ?int
    {
        return $this->idCart;
    }
    public function setIdCart(int $idCart): self
    {
        $this->idCart = $idCart;
    
        return $this;
    }
    
    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getIdProduct(): ?Produit
    {
        return $this->idProduct;
    }

    public function setIdProduct(?Produit $idProduct): self
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


}
