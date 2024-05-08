<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domains\ProviderDataMapper;

class ProviderDataMapperTest extends TestCase
{
    public function it_maps_provider_data_correctly()
    {
        $mapper = new ProviderDataMapper();
        $data = [
            'job_title' => 'Software Engineer',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
        ];

        $mappedData = $mapper->mapProviderData($data);

        $this->assertEquals('Software Engineer', $mappedData['jobTitle']);
        $this->assertEquals('John', $mappedData['firstName']);
        $this->assertEquals('Doe', $mappedData['lastName']);
        $this->assertEquals('john.doe@example.com', $mappedData['email']);
        $this->assertEquals('password123', $mappedData['password']);
    }

    public function it_standardizes_data_keys_to_snake_case()
    {
        $mapper = new ProviderDataMapper();
        $data = [
            'jobTitle' => 'Software Engineer',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
        ];

        $standardizedData = $mapper->standardizeData($data);

        $this->assertArrayNotHasKey('jobTitle', $standardizedData);
        $this->assertArrayHasKey('job_title', $standardizedData);
        $this->assertEquals('Software Engineer', $standardizedData['job_title']);
    }
}
