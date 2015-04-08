<?php namespace Acme\Billing;

interface BillilngInterface {

    public function charge(array $data);
}