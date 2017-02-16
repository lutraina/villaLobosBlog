<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/6ee41cf')) {
            // _assetic_6ee41cf
            if ($pathinfo === '/css/6ee41cf.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6ee41cf',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6ee41cf',);
            }

            if (0 === strpos($pathinfo, '/css/6ee41cf_')) {
                // _assetic_6ee41cf_0
                if ($pathinfo === '/css/6ee41cf_main_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6ee41cf',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6ee41cf_0',);
                }

                // _assetic_6ee41cf_1
                if ($pathinfo === '/css/6ee41cf_jquery-ui_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6ee41cf',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6ee41cf_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/7542672')) {
            // _assetic_7542672
            if ($pathinfo === '/js/7542672.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7542672',);
            }

            if (0 === strpos($pathinfo, '/js/7542672_')) {
                if (0 === strpos($pathinfo, '/js/7542672_jquery')) {
                    // _assetic_7542672_0
                    if ($pathinfo === '/js/7542672_jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7542672_0',);
                    }

                    // _assetic_7542672_1
                    if ($pathinfo === '/js/7542672_jquery-ui_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7542672_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/7542672_jquery.scroll')) {
                        // _assetic_7542672_2
                        if ($pathinfo === '/js/7542672_jquery.scrolly.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7542672_2',);
                        }

                        // _assetic_7542672_3
                        if ($pathinfo === '/js/7542672_jquery.scrollex.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7542672_3',);
                        }

                    }

                }

                // _assetic_7542672_4
                if ($pathinfo === '/js/7542672_skel.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_7542672_4',);
                }

                // _assetic_7542672_5
                if ($pathinfo === '/js/7542672_util_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_7542672_5',);
                }

                // _assetic_7542672_6
                if ($pathinfo === '/js/7542672_main_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7542672,  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_7542672_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
