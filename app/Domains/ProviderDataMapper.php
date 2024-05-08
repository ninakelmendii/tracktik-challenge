<?php

namespace App\Domains;

use App\Interfaces\Domains\ProviderDataMapperInterface;
use Illuminate\Support\Str;

class ProviderDataMapper implements ProviderDataMapperInterface
{
    public function mapProviderData($data)
    {
        return [
            'jobTitle' => $data['job_title'] ?? '',
            'gender' => $data['gender'] ?? '',
            'firstName' => $data['first_name'],
            'lastName' => $data['last_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ];
    }

    public function standardizeData($data)
    {
        return collect($data)->mapWithKeys(function ($value, $key) {
            return [Str::snake($key) => $value];
        })->all();
    }
}