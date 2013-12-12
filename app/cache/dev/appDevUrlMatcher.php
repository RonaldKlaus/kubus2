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

            if (0 === strpos($pathinfo, '/backend/teacher')) {
                // teacher
                if (rtrim($pathinfo, '/') === '/backend/teacher') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'teacher');
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::indexAction',  '_route' => 'teacher',);
                }

                // teacher_show
                if (preg_match('#^/backend/teacher/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_show')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::showAction',));
                }

                // teacher_new
                if ($pathinfo === '/backend/teacher/new') {
                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::newAction',  '_route' => 'teacher_new',);
                }

                // teacher_create
                if ($pathinfo === '/backend/teacher/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_teacher_create;
                    }

                    return array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::createAction',  '_route' => 'teacher_create',);
                }
                not_teacher_create:

                // teacher_edit
                if (preg_match('#^/backend/teacher/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::editAction',));
                }

                // teacher_update
                if (preg_match('#^/backend/teacher/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_teacher_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_update')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::updateAction',));
                }
                not_teacher_update:

                // teacher_delete
                if (preg_match('#^/backend/teacher/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_teacher_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_delete')), array (  '_controller' => 'Kubus\\BackendBundle\\Controller\\TeacherController::deleteAction',));
                }
                not_teacher_delete:

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
