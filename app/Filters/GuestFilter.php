<?php 



namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class GuestFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = session()->get('user');

        if ($user) {
            $route = match ($user['role']) {
                'admin'   => '/admin/dashboard',
                'manager' => '/manager/dashboard',
                default   => '/employee/dashboard',
            };

            return redirect()->to($route);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}

?>


