<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\Services\EmployeeServiceInterface;
use App\Http\Requests\FirstProviderRequest;
use App\Http\Requests\SecondProviderRequest;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeServiceInterface $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function sendToTrackTikApiByFirstProvider(FirstProviderRequest $request)
    {
        return $this->processProviderData($request);
    }

    public function sendToTrackTikApiBySecondProvider(SecondProviderRequest $request)
    {
        return $this->processProviderData($request);
    }

    private function processProviderData($request)
    {
        $providerData = $request->json()->all();
        $accessToken = $request->bearerToken();

        return $this->employeeService->handleProviderData($providerData, $accessToken);
    }
}
