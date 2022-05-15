<?php

namespace ContainerGEojumY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder43a90 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0fcc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties94e14 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getConnection', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getMetadataFactory', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getExpressionBuilder', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'beginTransaction', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getCache', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'transactional', array('func' => $func), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'commit', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->commit();
    }

    public function rollback()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'rollback', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getClassMetadata', array('className' => $className), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'createQuery', array('dql' => $dql), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'createNamedQuery', array('name' => $name), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'createQueryBuilder', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'flush', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'clear', array('entityName' => $entityName), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->clear($entityName);
    }

    public function close()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'close', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->close();
    }

    public function persist($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'persist', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'remove', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'refresh', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'detach', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'merge', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'contains', array('entity' => $entity), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getEventManager', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getConfiguration', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'isOpen', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getUnitOfWork', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getProxyFactory', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'initializeObject', array('obj' => $obj), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'getFilters', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'isFiltersStateClean', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'hasFilters', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return $this->valueHolder43a90->hasFilters();
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

        $instance->initializerf0fcc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder43a90) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder43a90 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder43a90->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__get', ['name' => $name], $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        if (isset(self::$publicProperties94e14[$name])) {
            return $this->valueHolder43a90->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43a90;

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

        $targetObject = $this->valueHolder43a90;
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
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43a90;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder43a90;
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
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__isset', array('name' => $name), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43a90;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder43a90;
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
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__unset', array('name' => $name), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder43a90;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder43a90;
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
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__clone', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        $this->valueHolder43a90 = clone $this->valueHolder43a90;
    }

    public function __sleep()
    {
        $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, '__sleep', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;

        return array('valueHolder43a90');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf0fcc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf0fcc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf0fcc && ($this->initializerf0fcc->__invoke($valueHolder43a90, $this, 'initializeProxy', array(), $this->initializerf0fcc) || 1) && $this->valueHolder43a90 = $valueHolder43a90;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder43a90;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder43a90;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
