<?php

namespace Jehaby\Optis\Controllers;

use Jehaby\Optis\Repositories\ProductRepository;


class ProductController {


    function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show($id){

    }


    public function showAll()
    {

    }

    public function update($id)
    {

    }

    public function delete($ids){

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        $this->repository->delete($ids);

    }

}