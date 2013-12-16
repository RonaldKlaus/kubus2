<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/backend')) {
            if (0 === strpos($pathinfo, '/backend/faculty')) {
                // faculty
                if (rtrim($pathinfo, '/') === '/backend/faculty') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'faculty');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::indexAction',  '_route' => 'faculty',);
                }

                // faculty_show
                if (preg_match('#^/backend/faculty/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculty_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::showAction',));
                }

                // faculty_new
                if ($pathinfo === '/backend/faculty/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::newAction',  '_route' => 'faculty_new',);
                }

                // faculty_create
                if ($pathinfo === '/backend/faculty/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_faculty_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::createAction',  '_route' => 'faculty_create',);
                }
                not_faculty_create:

                // faculty_edit
                if (preg_match('#^/backend/faculty/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculty_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::editAction',));
                }

                // faculty_update
                if (preg_match('#^/backend/faculty/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_faculty_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculty_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::updateAction',));
                }
                not_faculty_update:

                // faculty_delete
                if (preg_match('#^/backend/faculty/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_faculty_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'faculty_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FacultyController::deleteAction',));
                }
                not_faculty_delete:

            }

            if (0 === strpos($pathinfo, '/backend/university')) {
                // university
                if (rtrim($pathinfo, '/') === '/backend/university') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'university');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::indexAction',  '_route' => 'university',);
                }

                // university_show
                if (preg_match('#^/backend/university/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'university_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::showAction',));
                }

                // university_new
                if ($pathinfo === '/backend/university/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::newAction',  '_route' => 'university_new',);
                }

                // university_create
                if ($pathinfo === '/backend/university/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_university_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::createAction',  '_route' => 'university_create',);
                }
                not_university_create:

                // university_edit
                if (preg_match('#^/backend/university/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'university_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::editAction',));
                }

                // university_update
                if (preg_match('#^/backend/university/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_university_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'university_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::updateAction',));
                }
                not_university_update:

                // university_delete
                if (preg_match('#^/backend/university/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_university_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'university_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\UniversityController::deleteAction',));
                }
                not_university_delete:

            }

            if (0 === strpos($pathinfo, '/backend/financedata')) {
                // financedata
                if (rtrim($pathinfo, '/') === '/backend/financedata') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'financedata');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::indexAction',  '_route' => 'financedata',);
                }

                // financedata_show
                if (preg_match('#^/backend/financedata/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financedata_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::showAction',));
                }

                // financedata_new
                if ($pathinfo === '/backend/financedata/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::newAction',  '_route' => 'financedata_new',);
                }

                // financedata_create
                if ($pathinfo === '/backend/financedata/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_financedata_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::createAction',  '_route' => 'financedata_create',);
                }
                not_financedata_create:

                // financedata_edit
                if (preg_match('#^/backend/financedata/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financedata_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::editAction',));
                }

                // financedata_update
                if (preg_match('#^/backend/financedata/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_financedata_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financedata_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::updateAction',));
                }
                not_financedata_update:

                // financedata_delete
                if (preg_match('#^/backend/financedata/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_financedata_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'financedata_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\FinanceDataController::deleteAction',));
                }
                not_financedata_delete:

            }

            if (0 === strpos($pathinfo, '/backend/phddata')) {
                // phddata
                if (rtrim($pathinfo, '/') === '/backend/phddata') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'phddata');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::indexAction',  '_route' => 'phddata',);
                }

                // phddata_show
                if (preg_match('#^/backend/phddata/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phddata_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::showAction',));
                }

                // phddata_new
                if ($pathinfo === '/backend/phddata/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::newAction',  '_route' => 'phddata_new',);
                }

                // phddata_create
                if ($pathinfo === '/backend/phddata/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_phddata_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::createAction',  '_route' => 'phddata_create',);
                }
                not_phddata_create:

                // phddata_edit
                if (preg_match('#^/backend/phddata/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phddata_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::editAction',));
                }

                // phddata_update
                if (preg_match('#^/backend/phddata/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_phddata_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phddata_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::updateAction',));
                }
                not_phddata_update:

                // phddata_delete
                if (preg_match('#^/backend/phddata/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_phddata_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'phddata_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PhdDataController::deleteAction',));
                }
                not_phddata_delete:

            }

            if (0 === strpos($pathinfo, '/backend/text')) {
                // text
                if (rtrim($pathinfo, '/') === '/backend/text') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'text');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::indexAction',  '_route' => 'text',);
                }

                // text_show
                if (preg_match('#^/backend/text/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'text_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::showAction',));
                }

                // text_new
                if ($pathinfo === '/backend/text/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::newAction',  '_route' => 'text_new',);
                }

                // text_create
                if ($pathinfo === '/backend/text/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_text_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::createAction',  '_route' => 'text_create',);
                }
                not_text_create:

                // text_edit
                if (preg_match('#^/backend/text/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'text_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::editAction',));
                }

                // text_update
                if (preg_match('#^/backend/text/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_text_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'text_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::updateAction',));
                }
                not_text_update:

                // text_delete
                if (preg_match('#^/backend/text/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_text_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'text_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TextController::deleteAction',));
                }
                not_text_delete:

            }

            if (0 === strpos($pathinfo, '/backend/mail')) {
                // mail
                if (rtrim($pathinfo, '/') === '/backend/mail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mail');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::indexAction',  '_route' => 'mail',);
                }

                // mail_show
                if (preg_match('#^/backend/mail/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::showAction',));
                }

                // mail_new
                if ($pathinfo === '/backend/mail/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::newAction',  '_route' => 'mail_new',);
                }

                // mail_create
                if ($pathinfo === '/backend/mail/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mail_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::createAction',  '_route' => 'mail_create',);
                }
                not_mail_create:

                // mail_edit
                if (preg_match('#^/backend/mail/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::editAction',));
                }

                // mail_update
                if (preg_match('#^/backend/mail/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_mail_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::updateAction',));
                }
                not_mail_update:

                // mail_delete
                if (preg_match('#^/backend/mail/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_mail_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MailController::deleteAction',));
                }
                not_mail_delete:

            }

            if (0 === strpos($pathinfo, '/backend/comment')) {
                // comment
                if (rtrim($pathinfo, '/') === '/backend/comment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comment');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment',);
                }

                // comment_show
                if (preg_match('#^/backend/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::showAction',));
                }

                // comment_new
                if ($pathinfo === '/backend/comment/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
                }

                // comment_create
                if ($pathinfo === '/backend/comment/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comment_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::createAction',  '_route' => 'comment_create',);
                }
                not_comment_create:

                // comment_edit
                if (preg_match('#^/backend/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::editAction',));
                }

                // comment_update
                if (preg_match('#^/backend/comment/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_comment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::updateAction',));
                }
                not_comment_update:

                // comment_delete
                if (preg_match('#^/backend/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CommentController::deleteAction',));
                }
                not_comment_delete:

            }

            if (0 === strpos($pathinfo, '/backend/message')) {
                // message
                if (rtrim($pathinfo, '/') === '/backend/message') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::indexAction',  '_route' => 'message',);
                }

                // message_show
                if (preg_match('#^/backend/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::showAction',));
                }

                // message_new
                if ($pathinfo === '/backend/message/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::newAction',  '_route' => 'message_new',);
                }

                // message_create
                if ($pathinfo === '/backend/message/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_message_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::createAction',  '_route' => 'message_create',);
                }
                not_message_create:

                // message_edit
                if (preg_match('#^/backend/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::editAction',));
                }

                // message_update
                if (preg_match('#^/backend/message/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_message_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::updateAction',));
                }
                not_message_update:

                // message_delete
                if (preg_match('#^/backend/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_message_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\MessageController::deleteAction',));
                }
                not_message_delete:

            }

            if (0 === strpos($pathinfo, '/backend/sciencedomain')) {
                // sciencedomain
                if (rtrim($pathinfo, '/') === '/backend/sciencedomain') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sciencedomain');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::indexAction',  '_route' => 'sciencedomain',);
                }

                // sciencedomain_show
                if (preg_match('#^/backend/sciencedomain/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sciencedomain_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::showAction',));
                }

                // sciencedomain_new
                if ($pathinfo === '/backend/sciencedomain/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::newAction',  '_route' => 'sciencedomain_new',);
                }

                // sciencedomain_create
                if ($pathinfo === '/backend/sciencedomain/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sciencedomain_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::createAction',  '_route' => 'sciencedomain_create',);
                }
                not_sciencedomain_create:

                // sciencedomain_edit
                if (preg_match('#^/backend/sciencedomain/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sciencedomain_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::editAction',));
                }

                // sciencedomain_update
                if (preg_match('#^/backend/sciencedomain/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_sciencedomain_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sciencedomain_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::updateAction',));
                }
                not_sciencedomain_update:

                // sciencedomain_delete
                if (preg_match('#^/backend/sciencedomain/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_sciencedomain_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sciencedomain_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ScienceDomainController::deleteAction',));
                }
                not_sciencedomain_delete:

            }

            if (0 === strpos($pathinfo, '/backend/applicationstate')) {
                // applicationstate
                if (rtrim($pathinfo, '/') === '/backend/applicationstate') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'applicationstate');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::indexAction',  '_route' => 'applicationstate',);
                }

                // applicationstate_show
                if (preg_match('#^/backend/applicationstate/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicationstate_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::showAction',));
                }

                // applicationstate_new
                if ($pathinfo === '/backend/applicationstate/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::newAction',  '_route' => 'applicationstate_new',);
                }

                // applicationstate_create
                if ($pathinfo === '/backend/applicationstate/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_applicationstate_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::createAction',  '_route' => 'applicationstate_create',);
                }
                not_applicationstate_create:

                // applicationstate_edit
                if (preg_match('#^/backend/applicationstate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicationstate_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::editAction',));
                }

                // applicationstate_update
                if (preg_match('#^/backend/applicationstate/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_applicationstate_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicationstate_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::updateAction',));
                }
                not_applicationstate_update:

                // applicationstate_delete
                if (preg_match('#^/backend/applicationstate/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_applicationstate_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicationstate_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationStateController::deleteAction',));
                }
                not_applicationstate_delete:

            }

            if (0 === strpos($pathinfo, '/backend/managerdata')) {
                // managerdata
                if (rtrim($pathinfo, '/') === '/backend/managerdata') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'managerdata');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::indexAction',  '_route' => 'managerdata',);
                }

                // managerdata_show
                if (preg_match('#^/backend/managerdata/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managerdata_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::showAction',));
                }

                // managerdata_new
                if ($pathinfo === '/backend/managerdata/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::newAction',  '_route' => 'managerdata_new',);
                }

                // managerdata_create
                if ($pathinfo === '/backend/managerdata/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_managerdata_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::createAction',  '_route' => 'managerdata_create',);
                }
                not_managerdata_create:

                // managerdata_edit
                if (preg_match('#^/backend/managerdata/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managerdata_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::editAction',));
                }

                // managerdata_update
                if (preg_match('#^/backend/managerdata/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_managerdata_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managerdata_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::updateAction',));
                }
                not_managerdata_update:

                // managerdata_delete
                if (preg_match('#^/backend/managerdata/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_managerdata_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'managerdata_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ManagerDataController::deleteAction',));
                }
                not_managerdata_delete:

            }

            if (0 === strpos($pathinfo, '/backend/personrole')) {
                // personrole
                if (rtrim($pathinfo, '/') === '/backend/personrole') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'personrole');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::indexAction',  '_route' => 'personrole',);
                }

                // personrole_show
                if (preg_match('#^/backend/personrole/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personrole_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::showAction',));
                }

                // personrole_new
                if ($pathinfo === '/backend/personrole/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::newAction',  '_route' => 'personrole_new',);
                }

                // personrole_create
                if ($pathinfo === '/backend/personrole/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_personrole_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::createAction',  '_route' => 'personrole_create',);
                }
                not_personrole_create:

                // personrole_edit
                if (preg_match('#^/backend/personrole/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personrole_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::editAction',));
                }

                // personrole_update
                if (preg_match('#^/backend/personrole/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_personrole_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personrole_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::updateAction',));
                }
                not_personrole_update:

                // personrole_delete
                if (preg_match('#^/backend/personrole/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_personrole_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'personrole_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonRoleController::deleteAction',));
                }
                not_personrole_delete:

            }

            if (0 === strpos($pathinfo, '/backend/role')) {
                // role
                if (rtrim($pathinfo, '/') === '/backend/role') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'role');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
                }

                // role_show
                if (preg_match('#^/backend/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::showAction',));
                }

                // role_new
                if ($pathinfo === '/backend/role/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
                }

                // role_create
                if ($pathinfo === '/backend/role/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_role_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
                }
                not_role_create:

                // role_edit
                if (preg_match('#^/backend/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::editAction',));
                }

                // role_update
                if (preg_match('#^/backend/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_role_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::updateAction',));
                }
                not_role_update:

                // role_delete
                if (preg_match('#^/backend/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\RoleController::deleteAction',));
                }
                not_role_delete:

            }

            if (0 === strpos($pathinfo, '/backend/attributes')) {
                // attributes
                if (rtrim($pathinfo, '/') === '/backend/attributes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'attributes');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::indexAction',  '_route' => 'attributes',);
                }

                // attributes_show
                if (preg_match('#^/backend/attributes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attributes_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::showAction',));
                }

                // attributes_new
                if ($pathinfo === '/backend/attributes/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::newAction',  '_route' => 'attributes_new',);
                }

                // attributes_create
                if ($pathinfo === '/backend/attributes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_attributes_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::createAction',  '_route' => 'attributes_create',);
                }
                not_attributes_create:

                // attributes_edit
                if (preg_match('#^/backend/attributes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attributes_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::editAction',));
                }

                // attributes_update
                if (preg_match('#^/backend/attributes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_attributes_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attributes_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::updateAction',));
                }
                not_attributes_update:

                // attributes_delete
                if (preg_match('#^/backend/attributes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_attributes_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'attributes_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AttributesController::deleteAction',));
                }
                not_attributes_delete:

            }

            if (0 === strpos($pathinfo, '/backend/tool')) {
                // tool
                if (rtrim($pathinfo, '/') === '/backend/tool') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tool');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::indexAction',  '_route' => 'tool',);
                }

                // tool_show
                if (preg_match('#^/backend/tool/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tool_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::showAction',));
                }

                // tool_new
                if ($pathinfo === '/backend/tool/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::newAction',  '_route' => 'tool_new',);
                }

                // tool_create
                if ($pathinfo === '/backend/tool/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tool_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::createAction',  '_route' => 'tool_create',);
                }
                not_tool_create:

                // tool_edit
                if (preg_match('#^/backend/tool/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tool_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::editAction',));
                }

                // tool_update
                if (preg_match('#^/backend/tool/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tool_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tool_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::updateAction',));
                }
                not_tool_update:

                // tool_delete
                if (preg_match('#^/backend/tool/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tool_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tool_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ToolController::deleteAction',));
                }
                not_tool_delete:

            }

            if (0 === strpos($pathinfo, '/backend/application')) {
                // application
                if (rtrim($pathinfo, '/') === '/backend/application') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'application');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::indexAction',  '_route' => 'application',);
                }

                // application_show
                if (preg_match('#^/backend/application/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::showAction',));
                }

                // application_new
                if ($pathinfo === '/backend/application/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::newAction',  '_route' => 'application_new',);
                }

                // application_create
                if ($pathinfo === '/backend/application/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_application_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::createAction',  '_route' => 'application_create',);
                }
                not_application_create:

                // application_edit
                if (preg_match('#^/backend/application/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::editAction',));
                }

                // application_update
                if (preg_match('#^/backend/application/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_application_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::updateAction',));
                }
                not_application_update:

                // application_delete
                if (preg_match('#^/backend/application/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_application_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'application_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ApplicationController::deleteAction',));
                }
                not_application_delete:

            }

            if (0 === strpos($pathinfo, '/backend/lesson')) {
                if (0 === strpos($pathinfo, '/backend/lessont')) {
                    if (0 === strpos($pathinfo, '/backend/lessonteacher')) {
                        // lessonteacher
                        if (rtrim($pathinfo, '/') === '/backend/lessonteacher') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'lessonteacher');
                            }

                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::indexAction',  '_route' => 'lessonteacher',);
                        }

                        // lessonteacher_show
                        if (preg_match('#^/backend/lessonteacher/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonteacher_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::showAction',));
                        }

                        // lessonteacher_new
                        if ($pathinfo === '/backend/lessonteacher/new') {
                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::newAction',  '_route' => 'lessonteacher_new',);
                        }

                        // lessonteacher_create
                        if ($pathinfo === '/backend/lessonteacher/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_lessonteacher_create;
                            }

                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::createAction',  '_route' => 'lessonteacher_create',);
                        }
                        not_lessonteacher_create:

                        // lessonteacher_edit
                        if (preg_match('#^/backend/lessonteacher/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonteacher_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::editAction',));
                        }

                        // lessonteacher_update
                        if (preg_match('#^/backend/lessonteacher/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_lessonteacher_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonteacher_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::updateAction',));
                        }
                        not_lessonteacher_update:

                        // lessonteacher_delete
                        if (preg_match('#^/backend/lessonteacher/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_lessonteacher_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonteacher_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonTeacherController::deleteAction',));
                        }
                        not_lessonteacher_delete:

                    }

                    if (0 === strpos($pathinfo, '/backend/lessontool')) {
                        // lessontool
                        if (rtrim($pathinfo, '/') === '/backend/lessontool') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'lessontool');
                            }

                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::indexAction',  '_route' => 'lessontool',);
                        }

                        // lessontool_show
                        if (preg_match('#^/backend/lessontool/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessontool_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::showAction',));
                        }

                        // lessontool_new
                        if ($pathinfo === '/backend/lessontool/new') {
                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::newAction',  '_route' => 'lessontool_new',);
                        }

                        // lessontool_create
                        if ($pathinfo === '/backend/lessontool/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_lessontool_create;
                            }

                            return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::createAction',  '_route' => 'lessontool_create',);
                        }
                        not_lessontool_create:

                        // lessontool_edit
                        if (preg_match('#^/backend/lessontool/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessontool_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::editAction',));
                        }

                        // lessontool_update
                        if (preg_match('#^/backend/lessontool/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_lessontool_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessontool_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::updateAction',));
                        }
                        not_lessontool_update:

                        // lessontool_delete
                        if (preg_match('#^/backend/lessontool/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_lessontool_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessontool_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonToolController::deleteAction',));
                        }
                        not_lessontool_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/backend/lessonlocation')) {
                    // lessonlocation
                    if (rtrim($pathinfo, '/') === '/backend/lessonlocation') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'lessonlocation');
                        }

                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::indexAction',  '_route' => 'lessonlocation',);
                    }

                    // lessonlocation_show
                    if (preg_match('#^/backend/lessonlocation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonlocation_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::showAction',));
                    }

                    // lessonlocation_new
                    if ($pathinfo === '/backend/lessonlocation/new') {
                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::newAction',  '_route' => 'lessonlocation_new',);
                    }

                    // lessonlocation_create
                    if ($pathinfo === '/backend/lessonlocation/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_lessonlocation_create;
                        }

                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::createAction',  '_route' => 'lessonlocation_create',);
                    }
                    not_lessonlocation_create:

                    // lessonlocation_edit
                    if (preg_match('#^/backend/lessonlocation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonlocation_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::editAction',));
                    }

                    // lessonlocation_update
                    if (preg_match('#^/backend/lessonlocation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_lessonlocation_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonlocation_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::updateAction',));
                    }
                    not_lessonlocation_update:

                    // lessonlocation_delete
                    if (preg_match('#^/backend/lessonlocation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_lessonlocation_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessonlocation_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonLocationController::deleteAction',));
                    }
                    not_lessonlocation_delete:

                }

                if (0 === strpos($pathinfo, '/backend/lessondate')) {
                    // lessondate
                    if (rtrim($pathinfo, '/') === '/backend/lessondate') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'lessondate');
                        }

                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::indexAction',  '_route' => 'lessondate',);
                    }

                    // lessondate_show
                    if (preg_match('#^/backend/lessondate/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessondate_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::showAction',));
                    }

                    // lessondate_new
                    if ($pathinfo === '/backend/lessondate/new') {
                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::newAction',  '_route' => 'lessondate_new',);
                    }

                    // lessondate_create
                    if ($pathinfo === '/backend/lessondate/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_lessondate_create;
                        }

                        return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::createAction',  '_route' => 'lessondate_create',);
                    }
                    not_lessondate_create:

                    // lessondate_edit
                    if (preg_match('#^/backend/lessondate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessondate_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::editAction',));
                    }

                    // lessondate_update
                    if (preg_match('#^/backend/lessondate/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_lessondate_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessondate_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::updateAction',));
                    }
                    not_lessondate_update:

                    // lessondate_delete
                    if (preg_match('#^/backend/lessondate/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_lessondate_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'lessondate_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonDateController::deleteAction',));
                    }
                    not_lessondate_delete:

                }

            }

            if (0 === strpos($pathinfo, '/backend/audience')) {
                // audience
                if (rtrim($pathinfo, '/') === '/backend/audience') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'audience');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::indexAction',  '_route' => 'audience',);
                }

                // audience_show
                if (preg_match('#^/backend/audience/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'audience_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::showAction',));
                }

                // audience_new
                if ($pathinfo === '/backend/audience/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::newAction',  '_route' => 'audience_new',);
                }

                // audience_create
                if ($pathinfo === '/backend/audience/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_audience_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::createAction',  '_route' => 'audience_create',);
                }
                not_audience_create:

                // audience_edit
                if (preg_match('#^/backend/audience/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'audience_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::editAction',));
                }

                // audience_update
                if (preg_match('#^/backend/audience/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_audience_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'audience_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::updateAction',));
                }
                not_audience_update:

                // audience_delete
                if (preg_match('#^/backend/audience/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_audience_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'audience_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AudienceController::deleteAction',));
                }
                not_audience_delete:

            }

            if (0 === strpos($pathinfo, '/backend/subcategory')) {
                // subcategory
                if (rtrim($pathinfo, '/') === '/backend/subcategory') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subcategory');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::indexAction',  '_route' => 'subcategory',);
                }

                // subcategory_show
                if (preg_match('#^/backend/subcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::showAction',));
                }

                // subcategory_new
                if ($pathinfo === '/backend/subcategory/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::newAction',  '_route' => 'subcategory_new',);
                }

                // subcategory_create
                if ($pathinfo === '/backend/subcategory/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_subcategory_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::createAction',  '_route' => 'subcategory_create',);
                }
                not_subcategory_create:

                // subcategory_edit
                if (preg_match('#^/backend/subcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::editAction',));
                }

                // subcategory_update
                if (preg_match('#^/backend/subcategory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_subcategory_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::updateAction',));
                }
                not_subcategory_update:

                // subcategory_delete
                if (preg_match('#^/backend/subcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_subcategory_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subcategory_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\SubCategoryController::deleteAction',));
                }
                not_subcategory_delete:

            }

            if (0 === strpos($pathinfo, '/backend/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/backend/category') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }

                // category_show
                if (preg_match('#^/backend/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::showAction',));
                }

                // category_new
                if ($pathinfo === '/backend/category/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }

                // category_create
                if ($pathinfo === '/backend/category/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_category_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                }
                not_category_create:

                // category_edit
                if (preg_match('#^/backend/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::editAction',));
                }

                // category_update
                if (preg_match('#^/backend/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::updateAction',));
                }
                not_category_update:

                // category_delete
                if (preg_match('#^/backend/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/backend/program')) {
                // program
                if (rtrim($pathinfo, '/') === '/backend/program') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'program');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::indexAction',  '_route' => 'program',);
                }

                // program_show
                if (preg_match('#^/backend/program/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::showAction',));
                }

                // program_new
                if ($pathinfo === '/backend/program/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::newAction',  '_route' => 'program_new',);
                }

                // program_create
                if ($pathinfo === '/backend/program/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_program_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::createAction',  '_route' => 'program_create',);
                }
                not_program_create:

                // program_edit
                if (preg_match('#^/backend/program/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::editAction',));
                }

                // program_update
                if (preg_match('#^/backend/program/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_program_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::updateAction',));
                }
                not_program_update:

                // program_delete
                if (preg_match('#^/backend/program/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_program_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'program_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\ProgramController::deleteAction',));
                }
                not_program_delete:

            }

            if (0 === strpos($pathinfo, '/backend/lesson')) {
                // lesson
                if (rtrim($pathinfo, '/') === '/backend/lesson') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'lesson');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::indexAction',  '_route' => 'lesson',);
                }

                // lesson_show
                if (preg_match('#^/backend/lesson/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesson_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::showAction',));
                }

                // lesson_new
                if ($pathinfo === '/backend/lesson/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::newAction',  '_route' => 'lesson_new',);
                }

                // lesson_create
                if ($pathinfo === '/backend/lesson/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_lesson_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::createAction',  '_route' => 'lesson_create',);
                }
                not_lesson_create:

                // lesson_edit
                if (preg_match('#^/backend/lesson/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesson_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::editAction',));
                }

                // lesson_update
                if (preg_match('#^/backend/lesson/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_lesson_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesson_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::updateAction',));
                }
                not_lesson_update:

                // lesson_delete
                if (preg_match('#^/backend/lesson/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_lesson_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'lesson_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\LessonController::deleteAction',));
                }
                not_lesson_delete:

            }

            if (0 === strpos($pathinfo, '/backend/person')) {
                // person
                if (rtrim($pathinfo, '/') === '/backend/person') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'person');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::indexAction',  '_route' => 'person',);
                }

                // person_show
                if (preg_match('#^/backend/person/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::showAction',));
                }

                // person_new
                if ($pathinfo === '/backend/person/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::newAction',  '_route' => 'person_new',);
                }

                // person_create
                if ($pathinfo === '/backend/person/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_person_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::createAction',  '_route' => 'person_create',);
                }
                not_person_create:

                // person_edit
                if (preg_match('#^/backend/person/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::editAction',));
                }

                // person_update
                if (preg_match('#^/backend/person/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_person_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::updateAction',));
                }
                not_person_update:

                // person_delete
                if (preg_match('#^/backend/person/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_person_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\PersonController::deleteAction',));
                }
                not_person_delete:

            }

            if (0 === strpos($pathinfo, '/backend/course')) {
                // course
                if (rtrim($pathinfo, '/') === '/backend/course') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'course');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::indexAction',  '_route' => 'course',);
                }

                // course_show
                if (preg_match('#^/backend/course/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::showAction',));
                }

                // course_new
                if ($pathinfo === '/backend/course/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::newAction',  '_route' => 'course_new',);
                }

                // course_create
                if ($pathinfo === '/backend/course/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_course_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
                }
                not_course_create:

                // course_edit
                if (preg_match('#^/backend/course/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::editAction',));
                }

                // course_update
                if (preg_match('#^/backend/course/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_course_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::updateAction',));
                }
                not_course_update:

                // course_delete
                if (preg_match('#^/backend/course/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_course_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\CourseController::deleteAction',));
                }
                not_course_delete:

            }

            if (0 === strpos($pathinfo, '/backend/log')) {
                // login
                if ($pathinfo === '/backend/login') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AuthenticationController::loginAction',  '_route' => 'login',);
                }

                // logout
                if ($pathinfo === '/backend/logout') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\AuthenticationController::logoutAction',  '_route' => 'logout',);
                }

            }

            // index
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\NavigationController::indexAction',  '_route' => 'index',);
            }

        }

        // kubus_frontend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'kubus_frontend_homepage')), array (  '_controller' => 'Kubus\\FrontendBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
