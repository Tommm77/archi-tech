<?php

namespace ContainerFx9FtoU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B1zKDkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B1zK_Dk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B1zK_Dk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\FileCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\FileCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FileCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FileCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FileCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FileCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FileCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\FileCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FileCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FileCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FileController::generateInvoice' => ['privates', '.service_locator.sKWoSN8', 'get_ServiceLocator_SKWoSN8Service', true],
            'App\\Controller\\FileController::index' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.TDSH.ev', 'get_ServiceLocator_TDSH_EvService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::deleteAccount' => ['privates', '.service_locator.PdmZHi8', 'get_ServiceLocator_PdmZHi8Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\Admin\\FileCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\FileCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\FileCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\FileCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\FileCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\FileCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\FileCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\FileCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\FileCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FileCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\FileCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\FileCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => ['privates', '.service_locator.jwjltq_', 'get_ServiceLocator_JwjltqService', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.UrOEf8r', 'get_ServiceLocator_UrOEf8rService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.wvbCcwL', 'get_ServiceLocator_WvbCcwLService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.Nb584vp', 'get_ServiceLocator_Nb584vpService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.kud45L1', 'get_ServiceLocator_Kud45L1Service', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.vMUOjiq', 'get_ServiceLocator_VMUOjiqService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.yR6jqeD', 'get_ServiceLocator_YR6jqeDService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.jG5xrFj', 'get_ServiceLocator_JG5xrFjService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.t9B7cZ4', 'get_ServiceLocator_T9B7cZ4Service', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\FileController:generateInvoice' => ['privates', '.service_locator.sKWoSN8', 'get_ServiceLocator_SKWoSN8Service', true],
            'App\\Controller\\FileController:index' => ['privates', '.service_locator.t7nLwyX', 'get_ServiceLocator_T7nLwyXService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.TDSH.ev', 'get_ServiceLocator_TDSH_EvService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:deleteAccount' => ['privates', '.service_locator.PdmZHi8', 'get_ServiceLocator_PdmZHi8Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\FileCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\FileCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\FileCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\FileCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\FileCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\FileCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\FileCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FileCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\FileCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\FileCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController::delete' => '?',
            'App\\Controller\\Admin\\FileCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\FileCrudController::detail' => '?',
            'App\\Controller\\Admin\\FileCrudController::edit' => '?',
            'App\\Controller\\Admin\\FileCrudController::index' => '?',
            'App\\Controller\\Admin\\FileCrudController::new' => '?',
            'App\\Controller\\Admin\\FileCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\FileCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\FileCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\FileController::generateInvoice' => '?',
            'App\\Controller\\FileController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::deleteAccount' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\FileCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\FileCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\FileCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\FileCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\FileCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\FileCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\FileCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\FileCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\FileCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\FileCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\FileCrudController:delete' => '?',
            'App\\Controller\\Admin\\FileCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\FileCrudController:detail' => '?',
            'App\\Controller\\Admin\\FileCrudController:edit' => '?',
            'App\\Controller\\Admin\\FileCrudController:index' => '?',
            'App\\Controller\\Admin\\FileCrudController:new' => '?',
            'App\\Controller\\Admin\\FileCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\FileCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\FileCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\FileController:generateInvoice' => '?',
            'App\\Controller\\FileController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:deleteAccount' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
