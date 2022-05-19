<?php

namespace ContainerCB26PDK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5aa9a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d586 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1d472 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getConnection', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getMetadataFactory', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getExpressionBuilder', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'beginTransaction', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getCache', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'transactional', array('func' => $func), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'commit', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->commit();
    }

    public function rollback()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'rollback', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getClassMetadata', array('className' => $className), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'createQuery', array('dql' => $dql), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'createNamedQuery', array('name' => $name), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'createQueryBuilder', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'flush', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'clear', array('entityName' => $entityName), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->clear($entityName);
    }

    public function close()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'close', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->close();
    }

    public function persist($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'persist', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'remove', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'refresh', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'detach', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'merge', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'contains', array('entity' => $entity), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getEventManager', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getConfiguration', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'isOpen', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getUnitOfWork', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getProxyFactory', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'initializeObject', array('obj' => $obj), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'getFilters', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'isFiltersStateClean', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'hasFilters', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return $this->valueHolder5aa9a->hasFilters();
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

        $instance->initializer0d586 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5aa9a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5aa9a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5aa9a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__get', ['name' => $name], $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        if (isset(self::$publicProperties1d472[$name])) {
            return $this->valueHolder5aa9a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa9a;

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

        $targetObject = $this->valueHolder5aa9a;
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
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa9a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5aa9a;
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
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__isset', array('name' => $name), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa9a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5aa9a;
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
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__unset', array('name' => $name), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5aa9a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5aa9a;
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
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__clone', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        $this->valueHolder5aa9a = clone $this->valueHolder5aa9a;
    }

    public function __sleep()
    {
        $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, '__sleep', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;

        return array('valueHolder5aa9a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d586 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d586;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d586 && ($this->initializer0d586->__invoke($valueHolder5aa9a, $this, 'initializeProxy', array(), $this->initializer0d586) || 1) && $this->valueHolder5aa9a = $valueHolder5aa9a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5aa9a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5aa9a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
