<?php

namespace ContainerBhJnxyE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder16b3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82445 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e80f = [
        
    ];

    public function getConnection()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getConnection', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getMetadataFactory', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getExpressionBuilder', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'beginTransaction', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getCache', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'transactional', array('func' => $func), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'commit', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->commit();
    }

    public function rollback()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'rollback', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'createQuery', array('dql' => $dql), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'createQueryBuilder', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'flush', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'clear', array('entityName' => $entityName), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->clear($entityName);
    }

    public function close()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'close', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->close();
    }

    public function persist($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'persist', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'remove', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'refresh', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'detach', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'merge', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'contains', array('entity' => $entity), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getEventManager', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getConfiguration', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'isOpen', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getUnitOfWork', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getProxyFactory', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'getFilters', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'isFiltersStateClean', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'hasFilters', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return $this->valueHolder16b3a->hasFilters();
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

        $instance->initializer82445 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder16b3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder16b3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder16b3a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__get', ['name' => $name], $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        if (isset(self::$publicProperties7e80f[$name])) {
            return $this->valueHolder16b3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b3a;

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

        $targetObject = $this->valueHolder16b3a;
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
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b3a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder16b3a;
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
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__isset', array('name' => $name), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b3a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder16b3a;
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
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__unset', array('name' => $name), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder16b3a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder16b3a;
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
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__clone', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        $this->valueHolder16b3a = clone $this->valueHolder16b3a;
    }

    public function __sleep()
    {
        $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, '__sleep', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;

        return array('valueHolder16b3a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82445 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82445;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82445 && ($this->initializer82445->__invoke($valueHolder16b3a, $this, 'initializeProxy', array(), $this->initializer82445) || 1) && $this->valueHolder16b3a = $valueHolder16b3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder16b3a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder16b3a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
