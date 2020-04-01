<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigurationRepository")
 */
class Configuration
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Category", inversedBy="configuration", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $category_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $invoice_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $issue_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seller;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buyer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $products;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $form_of_payment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $due_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $devlivery;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $total_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?Category
    {
        return $this->category_id;
    }

    public function setCategoryId(Category $category_id): self
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getInvoiceNumber(): ?string
    {
        return $this->invoice_number;
    }

    public function setInvoiceNumber(string $invoice_number): self
    {
        $this->invoice_number = $invoice_number;

        return $this;
    }

    public function getIssueDate(): ?string
    {
        return $this->issue_date;
    }

    public function setIssueDate(string $issue_date): self
    {
        $this->issue_date = $issue_date;

        return $this;
    }

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(string $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    public function getBuyer(): ?string
    {
        return $this->buyer;
    }

    public function setBuyer(string $buyer): self
    {
        $this->buyer = $buyer;

        return $this;
    }

    public function getProducts(): ?string
    {
        return $this->products;
    }

    public function setProducts(?string $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getFormOfPayment(): ?string
    {
        return $this->form_of_payment;
    }

    public function setFormOfPayment(?string $form_of_payment): self
    {
        $this->form_of_payment = $form_of_payment;

        return $this;
    }

    public function getDueDate(): ?string
    {
        return $this->due_date;
    }

    public function setDueDate(?string $due_date): self
    {
        $this->due_date = $due_date;

        return $this;
    }

    public function getDevlivery(): ?string
    {
        return $this->devlivery;
    }

    public function setDevlivery(?string $devlivery): self
    {
        $this->devlivery = $devlivery;

        return $this;
    }

    public function getTotalAmount(): ?string
    {
        return $this->total_amount;
    }

    public function setTotalAmount(string $total_amount): self
    {
        $this->total_amount = $total_amount;

        return $this;
    }
}
