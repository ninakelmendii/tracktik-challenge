<?php

namespace App\Interfaces\Domains;

interface ProviderDataMapperInterface
{
    public function mapProviderData($providerData);
    public function standardizeData($providerData);
}