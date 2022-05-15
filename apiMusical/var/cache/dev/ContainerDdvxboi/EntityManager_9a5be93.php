<?php

namespace ContainerDdvxboi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1518a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28719 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb760a = [
        
    ];

    public function getConnection()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getConnection', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getMetadataFactory', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getExpressionBuilder', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'beginTransaction', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getCache', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'transactional', array('func' => $func), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'commit', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->commit();
    }

    public function rollback()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'rollback', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getClassMetadata', array('className' => $className), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'createQuery', array('dql' => $dql), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'createNamedQuery', array('name' => $name), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'createQueryBuilder', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'flush', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'clear', array('entityName' => $entityName), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->clear($entityName);
    }

    public function close()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'close', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->close();
    }

    public function persist($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'persist', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'remove', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'refresh', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'detach', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'merge', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'contains', array('entity' => $entity), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getEventManager', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getConfiguration', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'isOpen', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getUnitOfWork', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getProxyFactory', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'initializeObject', array('obj' => $obj), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'getFilters', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'isFiltersStateClean', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'hasFilters', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return $this->valueHolder1518a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer28719 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1518a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1518a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1518a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__get', ['name' => $name], $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        if (isset(self::$publicPropertiesb760a[$name])) {
            return $this->valueHolder1518a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1518a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1518a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1518a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1518a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__isset', array('name' => $name), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1518a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1518a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__unset', array('name' => $name), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1518a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1518a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__clone', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        $this->valueHolder1518a = clone $this->valueHolder1518a;
    }

    public function __sleep()
    {
        $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, '__sleep', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;

        return array('valueHolder1518a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28719 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28719;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer28719 && ($this->initializer28719->__invoke($valueHolder1518a, $this, 'initializeProxy', array(), $this->initializer28719) || 1) && $this->valueHolder1518a = $valueHolder1518a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1518a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1518a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
