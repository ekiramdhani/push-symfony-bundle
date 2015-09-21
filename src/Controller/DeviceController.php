<?php

/**
 * This file is part of the authbucket/push-symfony-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\Bundle\PushBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DeviceController extends Controller
{
    public function createAction(Request $request)
    {
        return $this->get('authbucket_push.device_controller')->createAction($request);
    }

    public function readAction(Request $request, $id)
    {
        return $this->get('authbucket_push.device_controller')->readAction($request, $id);
    }

    public function updateAction(Request $request, $id)
    {
        return $this->get('authbucket_push.device_controller')->updateAction($request, $id);
    }

    public function deleteAction(Request $request, $id)
    {
        return $this->get('authbucket_push.device_controller')->deleteAction($request, $id);
    }

    public function listAction(Request $request)
    {
        return $this->get('authbucket_push.device_controller')->listAction($request);
    }
}