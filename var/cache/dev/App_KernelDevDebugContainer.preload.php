<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerAR8Kime\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerAR8Kime/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerAR8Kime/getValidator_ExpressionService.php';
require __DIR__.'/ContainerAR8Kime/getValidator_EmailService.php';
require __DIR__.'/ContainerAR8Kime/getValidator_BuilderService.php';
require __DIR__.'/ContainerAR8Kime/getSession_FactoryService.php';
require __DIR__.'/ContainerAR8Kime/getServicesResetterService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerAR8Kime/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerAR8Kime/getSecrets_VaultService.php';
require __DIR__.'/ContainerAR8Kime/getRouting_LoaderService.php';
require __DIR__.'/ContainerAR8Kime/getErrorControllerService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerAR8Kime/getDoctrineService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_Security_Access_DecisionManagerService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerAR8Kime/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerAR8Kime/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerAR8Kime/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerAR8Kime/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerAR8Kime/getCache_SystemClearerService.php';
require __DIR__.'/ContainerAR8Kime/getCache_SystemService.php';
require __DIR__.'/ContainerAR8Kime/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerAR8Kime/getCache_AppClearerService.php';
require __DIR__.'/ContainerAR8Kime/getCache_AppService.php';
require __DIR__.'/ContainerAR8Kime/getTemplateControllerService.php';
require __DIR__.'/ContainerAR8Kime/getRedirectControllerService.php';
require __DIR__.'/ContainerAR8Kime/getVocabularyRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getUsersRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getUserRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getThemeRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getTestRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getSubscribeRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getDoDoRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getCompanyRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getCategoryRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/getBillRepositoryService.php';
require __DIR__.'/ContainerAR8Kime/get_ServiceLocator_MGHEj8dService.php';
require __DIR__.'/ContainerAR8Kime/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_Security_AuthorizationCheckerService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerAR8Kime/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'App\Repository\BillRepository';
$classes[] = 'App\Repository\CategoryRepository';
$classes[] = 'App\Repository\CompanyRepository';
$classes[] = 'App\Repository\DoDoRepository';
$classes[] = 'App\Repository\SubscribeRepository';
$classes[] = 'App\Repository\TestRepository';
$classes[] = 'App\Repository\ThemeRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'App\Repository\UsersRepository';
$classes[] = 'App\Repository\VocabularyRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator';
$classes[] = 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher';
$preloaded = Preloader::preload($classes, $preloaded);
