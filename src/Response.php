<?php

namespace Softonic\GraphQL;

class Response
{
    private $data;
    private $errors;
    private $response_headers;

    public function __construct(array $data, array $errors = [], array $response_headers = [])
    {
        $this->data = $data;
        $this->errors = $errors;
        $this->response_headers = $response_headers;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }
    
    public function hasHeader($header_name): bool
    {
        return !empty($this->response_headers[$header_name]);
    }
    
    public function getHeader($header_name): string
    {   
        if (!$this->hasHeader($header_name))
            return '';

        return $this->response_headers[$header_name][0];
    }
}
