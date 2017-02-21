<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gol_menu_homepage
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'GOL\\MenuBundle\\Controller\\MenuController::menuAction',  '_route' => 'gol_menu_homepage',);
        }

        // gol_footer_homepage
        if ($pathinfo === '/footer') {
            return array (  '_controller' => 'GOL\\FooterBundle\\Controller\\FooterController::footerAction',  '_route' => 'gol_footer_homepage',);
        }

        // gol_content_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gol_content_homepage');
            }

            return array (  '_controller' => 'GOL\\ContentBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gol_content_homepage',);
        }

        // gol_header_homepage
        if ($pathinfo === '/header') {
            return array (  '_controller' => 'GOL\\HeaderBundle\\Controller\\HeaderController::headerAction',  '_route' => 'gol_header_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
