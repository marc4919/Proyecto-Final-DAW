<?php

namespace Container8wMWxtu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder51503 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf86f6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0e611 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getConnection', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getMetadataFactory', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getExpressionBuilder', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'beginTransaction', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getCache', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'transactional', array('func' => $func), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'commit', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->commit();
    }

    public function rollback()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'rollback', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getClassMetadata', array('className' => $className), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'createQuery', array('dql' => $dql), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'createNamedQuery', array('name' => $name), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'createQueryBuilder', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'flush', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'clear', array('entityName' => $entityName), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->clear($entityName);
    }

    public function close()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'close', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->close();
    }

    public function persist($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'persist', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'remove', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'refresh', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'detach', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'merge', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'contains', array('entity' => $entity), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getEventManager', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getConfiguration', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'isOpen', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getUnitOfWork', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getProxyFactory', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'initializeObject', array('obj' => $obj), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'getFilters', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'isFiltersStateClean', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'hasFilters', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return $this->valueHolder51503->hasFilters();
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

        $instance->initializerf86f6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder51503) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder51503 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder51503->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__get', ['name' => $name], $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        if (isset(self::$publicProperties0e611[$name])) {
            return $this->valueHolder51503->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51503;

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

        $targetObject = $this->valueHolder51503;
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
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51503;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder51503;
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
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__isset', array('name' => $name), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51503;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder51503;
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
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__unset', array('name' => $name), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder51503;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder51503;
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
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__clone', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        $this->valueHolder51503 = clone $this->valueHolder51503;
    }

    public function __sleep()
    {
        $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, '__sleep', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;

        return array('valueHolder51503');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf86f6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf86f6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf86f6 && ($this->initializerf86f6->__invoke($valueHolder51503, $this, 'initializeProxy', array(), $this->initializerf86f6) || 1) && $this->valueHolder51503 = $valueHolder51503;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder51503;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder51503;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
