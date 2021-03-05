<?php
namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function all();
    public function create(array $data);
}



