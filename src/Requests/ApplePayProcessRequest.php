<?php

namespace KHTools\VPos\Requests;

use KHTools\VPos\Requests\Traits\MerchantTrait;
use Symfony\Component\Serializer\Annotation\Ignore;

class ApplePayProcessRequest implements RequestInterface
{
    use MerchantTrait;

    #[Ignore]
    public function getRequestMethod(): string
    {
        return 'POST';
    }

    #[Ignore]
    public function getEndpointPath(): string
    {
        throw new \RuntimeException("Method not implemented yet");
        return '';
    }

    #[Ignore]
    public function getResponseClass(): string
    {
        throw new \RuntimeException("Method not implemented yet");
        // TODO: Implement getResponseClass() method.
    }
}