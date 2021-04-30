<?php


namespace Authing\Types;


class Env
{
    public string $id;

    public string $userPoolId;

    public string $key;

    /**
     * @var mixed
     */
    public $value;

    public string $createdAt;

    public string $updatedAt;
}