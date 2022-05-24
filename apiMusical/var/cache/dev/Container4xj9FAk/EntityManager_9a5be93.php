<?php

namespace Container4xj9FAk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5905c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer121e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties39f83 = [
        
    ];

    public function getConnection()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getConnection', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getMetadataFactory', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getExpressionBuilder', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'beginTransaction', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getCache', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'transactional', array('func' => $func), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'commit', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->commit();
    }

    public function rollback()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'rollback', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getClassMetadata', array('className' => $className), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'createQuery', array('dql' => $dql), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'createNamedQuery', array('name' => $name), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'createQueryBuilder', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'flush', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'clear', array('entityName' => $entityName), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->clear($entityName);
    }

    public function close()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'close', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->close();
    }

    public function persist($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'persist', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'remove', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'refresh', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'detach', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'merge', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'contains', array('entity' => $entity), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getEventManager', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getConfiguration', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'isOpen', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getUnitOfWork', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getProxyFactory', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'initializeObject', array('obj' => $obj), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'getFilters', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'isFiltersStateClean', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'hasFilters', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return $this->valueHolder5905c->hasFilters();
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

        $instance->initializer121e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5905c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5905c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5905c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__get', ['name' => $name], $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        if (isset(self::$publicProperties39f83[$name])) {
            return $this->valueHolder5905c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5905c;

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

        $targetObject = $this->valueHolder5905c;
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
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5905c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5905c;
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
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__isset', array('name' => $name), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5905c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5905c;
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
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__unset', array('name' => $name), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5905c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5905c;
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
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__clone', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        $this->valueHolder5905c = clone $this->valueHolder5905c;
    }

    public function __sleep()
    {
        $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, '__sleep', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;

        return array('valueHolder5905c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer121e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer121e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer121e9 && ($this->initializer121e9->__invoke($valueHolder5905c, $this, 'initializeProxy', array(), $this->initializer121e9) || 1) && $this->valueHolder5905c = $valueHolder5905c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5905c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5905c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
