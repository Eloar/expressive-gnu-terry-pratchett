<?php

namespace GnuTP\Middleware;


use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;


/**
 * Middleware attaching GNU Terry Pratchet project compliant header to each response passed through pipe of which this
 * middleware is part of.
 * @package GnuTP
 */
class GnuTPClackMiddleware implements MiddlewareInterface
{
    const HEADER_NAME = 'X-Clacks-Overhead';

    /** {@inheritdoc} */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        $response = $delegate->process($request);
        return !$response->hasHeader(self::HEADER_NAME)? $response->withHeader(self::HEADER_NAME, 'GNU Terry Pratchett') : $response;
    }
}
