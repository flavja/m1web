<?php


namespace App\API\Entity;


class City implements \JsonSerializable
{
    private $id;
    private $name;
    private $image;

    public function jsonSerialize():array
    {
        return[
            'id' => $this->getId(),
            'name' => $this->getName(),
            'image' => $this->getImage()
        ];
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image): void
    {
        $this->image = $image;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getId():?int
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
}
