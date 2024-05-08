<?php

namespace App\Interfaces\Services;

interface EmployeeServiceInterface
{
    public function handleProviderData($providerData, $accessToken);
}