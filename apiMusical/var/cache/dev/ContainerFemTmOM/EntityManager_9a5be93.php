<?php

namespace ContainerFemTmOM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4f061 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9c4ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0574b = [
        
    ];

    public function getConnection()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getConnection', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getMetadataFactory', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getExpressionBuilder', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'beginTransaction', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getCache', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'transactional', array('func' => $func), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'commit', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->commit();
    }

    public function rollback()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'rollback', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getClassMetadata', array('className' => $className), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'createQuery', array('dql' => $dql), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'createNamedQuery', array('name' => $name), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'createQueryBuilder', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'flush', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'clear', array('entityName' => $entityName), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->clear($entityName);
    }

    public function close()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'close', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->close();
    }

    public function persist($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'persist', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'remove', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'refresh', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'detach', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'merge', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'contains', array('entity' => $entity), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getEventManager', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getConfiguration', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'isOpen', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getUnitOfWork', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getProxyFactory', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'initializeObject', array('obj' => $obj), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'getFilters', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'isFiltersStateClean', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'hasFilters', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return $this->valueHolder4f061->hasFilters();
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

        $instance->initializer9c4ce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4f061) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4f061 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4f061->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__get', ['name' => $name], $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        if (isset(self::$publicProperties0574b[$name])) {
            return $this->valueHolder4f061->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f061;

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

        $targetObject = $this->valueHolder4f061;
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
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f061;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4f061;
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
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__isset', array('name' => $name), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f061;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4f061;
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
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__unset', array('name' => $name), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f061;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4f061;
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
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__clone', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        $this->valueHolder4f061 = clone $this->valueHolder4f061;
    }

    public function __sleep()
    {
        $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, '__sleep', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;

        return array('valueHolder4f061');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9c4ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9c4ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9c4ce && ($this->initializer9c4ce->__invoke($valueHolder4f061, $this, 'initializeProxy', array(), $this->initializer9c4ce) || 1) && $this->valueHolder4f061 = $valueHolder4f061;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4f061;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4f061;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
