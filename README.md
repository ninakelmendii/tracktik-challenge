# TrackTik Coding Challenge

Welcome to the TrackTik Coding Challenge! This challenge is responsible for implementing two identity provider routes in the `api.php` file of a Laravel application. These routes call two different methods on the `EmployeeController`, where the mapping of the data is done. After processing, the data is sent to the Create Employee API of the TrackTik system.

## Implemented Functionality

### Identity Provider Routes

1. **Route 1: /api/first-identity-provider**
    - Description: This route is responsible for receiving data from the first identity provider.
    - HTTP Method: POST
    - Controller Method: `EmployeeController@sendToTrackTikApiByFirstProvider`
    - Request Parameters: Data payload containing information about the employee from the first identity provider, implemented on FirstProviderRequest FormRequest.

2. **Route 2: /api/second-identity-provider**
    - Description: This route is responsible for receiving data from the second identity provider.
    - HTTP Method: POST
    - Controller Method: `EmployeeController@sendToTrackTikApiBySecondProvider`
    - Request Parameters: Data payload containing information about the employee from the second identity provider, implemented on SecondProviderRequest FormRequest.


### Integration with TrackTik API

- After processing the data in the `EmployeeController` methods, the processed data is sent to the Create Employee API of the TrackTik system for creation of the employee record.


## Support

If you have any questions or need further assistance regarding the implemented functionality, please reach out.
