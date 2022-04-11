<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InvoiceRepository::class)]
class Invoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $dateInvoice;

    #[ORM\Column(type: 'integer')]
    private $numberInvoice;

    #[ORM\Column(type: 'integer')]
    private $customerId;

    #[ORM\OneToMany(mappedBy: 'invoice', targetEntity: Invoicelines::class, cascade: ["persist"])]
    private $invoicelines;

    public function __construct()
    {
        $this->invoicelines = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInvoice(): ?\DateTimeInterface
    {
        return $this->dateInvoice;
    }

    public function setDateInvoice(\DateTimeInterface $dateInvoice): self
    {
        $this->dateInvoice = $dateInvoice;

        return $this;
    }

    public function getNumberInvoice(): ?int
    {
        return $this->numberInvoice;
    }

    public function setNumberInvoice(int $numberInvoice): self
    {
        $this->numberInvoice = $numberInvoice;

        return $this;
    }

    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    public function setCustomerId(int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return Collection<int, Invoicelines>
     */
    public function getInvoicelines(): Collection
    {
        return $this->invoicelines;
    }

    public function addInvoiceline(Invoicelines $invoiceline): self
    {
        if (!$this->invoicelines->contains($invoiceline)) {
            $this->invoicelines[] = $invoiceline;
            $invoiceline->setInvoice($this);
        }

        return $this;
    }

    public function removeInvoiceline(Invoicelines $invoiceline): self
    {
        if ($this->invoicelines->removeElement($invoiceline)) {
            // set the owning side to null (unless already changed)
            if ($invoiceline->getInvoice() === $this) {
                $invoiceline->setInvoice(null);
            }
        }

        return $this;
    }
}
