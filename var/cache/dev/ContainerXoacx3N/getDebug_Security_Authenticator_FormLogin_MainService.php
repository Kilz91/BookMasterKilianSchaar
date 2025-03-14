<?php

namespace ContainerXoacx3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Authenticator_FormLogin_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.authenticator.form_login.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AbstractLoginFormAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/FormLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php';

        $a = ($container->services['http_kernel'] ?? self::getHttpKernelService($container));

        if (isset($container->privates['debug.security.authenticator.form_login.main'])) {
            return $container->privates['debug.security.authenticator.form_login.main'];
        }
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));
        $c = ($container->privates['logger'] ?? self::getLoggerService($container));

        $d = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($b, [], $c);
        $d->setOptions(['login_path' => 'auth.login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false]);
        $d->setFirewallName('main');
        $e = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($a, $b, [], $c);
        $e->setOptions(['login_path' => 'auth.login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

        return $container->privates['debug.security.authenticator.form_login.main'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticator(new \Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator($b, ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $d, $e, ['login_path' => 'auth.login', 'check_path' => 'auth.login', 'enable_csrf' => false, 'use_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true, 'form_only' => false]));
    }
}
