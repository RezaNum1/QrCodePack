<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdentityRepository")
 */
class Identity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Jabatan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Perusahaan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NoTelepon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NoTeleponPerusahaan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmailPerusahaan;

    /**
     * @ORM\Column(type="integer")
     */
    private $NIK;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNama(): ?string
    {
        return $this->Nama;
    }

    public function setNama(string $Nama): self
    {
        $this->Nama = $Nama;

        return $this;
    }

    public function getJabatan(): ?string
    {
        return $this->Jabatan;
    }

    public function setJabatan(string $Jabatan): self
    {
        $this->Jabatan = $Jabatan;

        return $this;
    }

    public function getPerusahaan(): ?string
    {
        return $this->Perusahaan;
    }

    public function setPerusahaan(string $Perusahaan): self
    {
        $this->Perusahaan = $Perusahaan;

        return $this;
    }

    public function getNoTelepon(): ?string
    {
        return $this->NoTelepon;
    }

    public function setNoTelepon(string $NoTelepon): self
    {
        $this->NoTelepon = $NoTelepon;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNoTeleponPerusahaan(): ?string
    {
        return $this->NoTeleponPerusahaan;
    }

    public function setNoTeleponPerusahaan(string $NoTeleponPerusahaan): self
    {
        $this->NoTeleponPerusahaan = $NoTeleponPerusahaan;

        return $this;
    }

    public function getEmailPerusahaan(): ?string
    {
        return $this->EmailPerusahaan;
    }

    public function setEmailPerusahaan(string $EmailPerusahaan): self
    {
        $this->EmailPerusahaan = $EmailPerusahaan;

        return $this;
    }

    public function getNIK(): ?int
    {
        return $this->NIK;
    }

    public function setNIK(int $NIK): self
    {
        $this->NIK = $NIK;

        return $this;
    }
}
