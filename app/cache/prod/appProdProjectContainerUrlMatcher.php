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

        if (0 === strpos($pathinfo, '/biographie')) {
            // biographie_index
            if (rtrim($pathinfo, '/') === '/biographie') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_biographie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'biographie_index');
                }

                return array (  '_controller' => 'Blog\\ServingBundle\\Controller\\BiographieController::indexAction',  '_route' => 'biographie_index',);
            }
            not_biographie_index:

            // biographie_new
            if ($pathinfo === '/biographie/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_biographie_new;
                }

                return array (  '_controller' => 'Blog\\ServingBundle\\Controller\\BiographieController::newAction',  '_route' => 'biographie_new',);
            }
            not_biographie_new:

            // biographie_show
            if (preg_match('#^/biographie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_biographie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biographie_show')), array (  '_controller' => 'Blog\\ServingBundle\\Controller\\BiographieController::showAction',));
            }
            not_biographie_show:

            // biographie_edit
            if (preg_match('#^/biographie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_biographie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biographie_edit')), array (  '_controller' => 'Blog\\ServingBundle\\Controller\\BiographieController::editAction',));
            }
            not_biographie_edit:

            // biographie_delete
            if (preg_match('#^/biographie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_biographie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biographie_delete')), array (  '_controller' => 'Blog\\ServingBundle\\Controller\\BiographieController::deleteAction',));
            }
            not_biographie_delete:

        }

        // homepage
        if ($pathinfo === '/homepage') {
            return array (  '_controller' => 'Blog\\ServingBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
