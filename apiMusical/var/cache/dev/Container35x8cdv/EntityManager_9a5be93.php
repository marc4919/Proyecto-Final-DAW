<?php

namespace Container35x8cdv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder565bf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbbac0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4cc0 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getConnection', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getMetadataFactory', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getExpressionBuilder', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'beginTransaction', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getCache', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'transactional', array('func' => $func), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'commit', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->commit();
    }

    public function rollback()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'rollback', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getClassMetadata', array('className' => $className), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'createQuery', array('dql' => $dql), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'createNamedQuery', array('name' => $name), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'createQueryBuilder', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'flush', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'clear', array('entityName' => $entityName), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->clear($entityName);
    }

    public function close()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'close', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->close();
    }

    public function persist($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'persist', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'remove', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'refresh', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'detach', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'merge', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'contains', array('entity' => $entity), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getEventManager', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getConfiguration', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'isOpen', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getUnitOfWork', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getProxyFactory', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'initializeObject', array('obj' => $obj), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'getFilters', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'isFiltersStateClean', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'hasFilters', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return $this->valueHolder565bf->hasFilters();
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

        $instance->initializerbbac0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder565bf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder565bf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder565bf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__get', ['name' => $name], $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        if (isset(self::$publicPropertiesd4cc0[$name])) {
            return $this->valueHolder565bf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder565bf;

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

        $targetObject = $this->valueHolder565bf;
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
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder565bf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder565bf;
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
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__isset', array('name' => $name), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder565bf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder565bf;
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
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__unset', array('name' => $name), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder565bf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder565bf;
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
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__clone', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        $this->valueHolder565bf = clone $this->valueHolder565bf;
    }

    public function __sleep()
    {
        $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, '__sleep', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;

        return array('valueHolder565bf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbbac0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbbac0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbbac0 && ($this->initializerbbac0->__invoke($valueHolder565bf, $this, 'initializeProxy', array(), $this->initializerbbac0) || 1) && $this->valueHolder565bf = $valueHolder565bf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder565bf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder565bf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
