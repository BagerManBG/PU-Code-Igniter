<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = NULL)
  {
    // if user not logged in
    $user_session = session()->get('user');
    if (!(isset($user_session) && $user_session['logged_in']))
    {
      // then redirct to login page
      return redirect()->to('/login');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = NULL)
  {
    // Do something here
  }

}
