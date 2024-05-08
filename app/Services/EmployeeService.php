<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

use App\Interfaces\Services\EmployeeServiceInterface;
use App\Interfaces\Domains\ProviderDataMapperInterface;

class EmployeeService implements EmployeeServiceInterface
{
    protected $providerDataMapperDomain;

    public function __construct(
        ProviderDataMapperInterface $providerDataMapperDomain
    ) {
        $this->providerDataMapperDomain = $providerDataMapperDomain;
    }

    public function handleProviderData($providerData, $accessToken)
    {
        $standardizedData = $this->providerDataMapperDomain->standardizeData($providerData);
        $mappedData = $this->providerDataMapperDomain->mapProviderData($standardizedData);

        return $this->sendEmployeeDataToTrackTikApi($mappedData, $accessToken);
    }

    private function sendEmployeeDataToTrackTikApi($mappedData, $accessToken)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Content-Type' => 'application/json',
        ])->post('https://api3090.qa.staffr.ca/rest/v1/employees', $mappedData);



        if ($response->successful()) {
            return response()->json(['message' => 'Data received and mapped successfully.'], 200);
        }
        return response()->json(['message' => 'Something went wrong, please check the request!'], 400);
    }
}