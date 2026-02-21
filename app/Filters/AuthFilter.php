<?php

// ================================================================
// FILE 1: app/Filters/AuthFilter.php
// Protects routes that require an authenticated user.
// ================================================================

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (! session()->get('user')) {
            // AJAX / JSON API → 401
            if ($request->isAJAX() || str_contains($request->getHeaderLine('Accept'), 'application/json')) {
                return service('response')
                    ->setStatusCode(401)
                    ->setJSON(['status' => false, 'message' => 'Unauthenticated.']);
            }

            return redirect()->to('/auth/login')->with('error', 'Please log in to continue.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}