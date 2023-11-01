# THEORY - GET & INCLUDE

## Anatomy of a URL 
In PHP, a URL (Uniform Resource Locator) consists of the following components:
* Scheme: defines how the resource will be obtained
* Subdomain: www is most common but not required
* Domain: unique value within its top-level domain
* Port: if omitted HTTP will connect on port 80, HTTPS on 443
* Path: Specify and perhaps find the requested resource
* Query String: data passed to server-side software, if present
* Fragment Identifier: a specific place within an HTML document

To work with URLs in PHP, you can use functions like `parse_url()` to extract the URL components and `http_build_query()` to construct URLs with parameters.

***

## Send a request with parameters
GET request is used to: request a resource from the server.
Sample request with parameters: `https://www.example.com/path/to/resource?key1=value1&key2=value2`

***

## Catch the request : `$GET` Superglobal
`$_GET` is a PHP super global variable which is used to collect form data after submitting an HTML form with `method="get"`.
`$_GET` can also collect data sent in the URL.

***

## Ternary operator
> (condition) ? (Statement 1) : (Statement 2);

* Condition: It is the expression to be evaluated and returns a boolean value.
* Statement 1: It is the statement to be executed if the condition results in a true state.
* Statement 2: It is the statement to be executed if the condition results in a false state.

**Advantages of Ternary Operator:** 
* The use of the ternary operator will make the code shorter in comparison to the IF ELSE statement.
* The code can be quick in length in comparison to the IF ELSE statement.
* The readability of the code will increase with the usage of conditional statements.
* The use of the ternary operator makes the code simpler.

## Check if value exist: isset
* The `isset()` function checks whether a variable is set, which means that it has to be declared and is not NULL.
* This function returns true if the variable exists and is not NULL, otherwise it returns false.
> Syntax: isset(variable, ....);

## Include another PHP :include & require
* The `include_once` keyword is used to embed PHP code from another file. If the file is not found, a warning is shown and the program continues to run. If the file was already included previously, this statement will not include it again.
* The `include` keyword is used to embed PHP code from another file. If the file is not found, a warning is shown and the program continues to run.
* The `require` keyword is used to embed PHP code from another file. If the file is not found, a fatal error is thrown and the program stops.
* The `require_once` keyword is used to embed PHP code from another file. If the file is not found, a fatal error is thrown and the program stops. If the file was already included previously, this statement will not include it again