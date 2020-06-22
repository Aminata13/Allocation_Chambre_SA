<?php

interface IDao {
    public function findAll();
    public function findById($id);
    public function add($obj);
    public function update($obj);
    public function delete($id);
}