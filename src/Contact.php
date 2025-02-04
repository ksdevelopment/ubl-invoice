<?php

namespace NumNum\UBL;

use Sabre\Xml\Writer;
use Sabre\Xml\XmlSerializable;

class Contact implements XmlSerializable
{
    protected $name;
    protected $telephone;
    protected $telefax;
    protected $electronicMail;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Contact
     */
    public function setName($name): Contact
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return Contact
     */
    public function setTelephone(?string $telephone): Contact
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelefax(): ?string
    {
        return $this->telefax;
    }

    /**
     * @param string $telefax
     * @return Contact
     */
    public function setTelefax(?string $telefax): Contact
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * @return string
     */
    public function getElectronicMail(): ?string
    {
        return $this->electronicMail;
    }

    /**
     * @param string $electronicMail
     * @return Contact
     */
    public function setElectronicMail(?string $electronicMail): Contact
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * The xmlSerialize method is called during xml writing.
     *
     * @param Writer $writer
     * @return void
     */
    public function xmlSerialize(Writer $writer): void
    {
        if ($this->name !== null) {
            $writer->write([
                Schema::CBC . 'Name' => $this->name
            ]);
        }

        if ($this->telephone !== null) {
            $writer->write([
                Schema::CBC . 'Telephone' => $this->telephone
            ]);
        }

        if ($this->telefax !== null) {
            $writer->write([
                Schema::CBC . 'Telefax' => $this->telefax
            ]);
        }

        if ($this->electronicMail !== null) {
            $writer->write([
                Schema::CBC . 'ElectronicMail' => $this->electronicMail
            ]);
        }
    }
}
