<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera1209 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4210 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd16c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getConnection', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getMetadataFactory', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getExpressionBuilder', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'beginTransaction', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getCache', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'transactional', array('func' => $func), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'commit', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->commit();
    }

    public function rollback()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'rollback', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'createQuery', array('dql' => $dql), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'createQueryBuilder', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'flush', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'clear', array('entityName' => $entityName), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'close', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->close();
    }

    public function persist($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'persist', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'remove', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'refresh', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'detach', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'merge', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'contains', array('entity' => $entity), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getEventManager', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getConfiguration', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'isOpen', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getUnitOfWork', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getProxyFactory', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'getFilters', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'isFiltersStateClean', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'hasFilters', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return $this->valueHoldera1209->hasFilters();
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

        $instance->initializerb4210 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera1209) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1209 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera1209->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__get', ['name' => $name], $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        if (isset(self::$publicPropertiesd16c3[$name])) {
            return $this->valueHoldera1209->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1209;

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

        $targetObject = $this->valueHoldera1209;
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
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1209;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera1209;
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
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__isset', array('name' => $name), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1209;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera1209;
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
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__unset', array('name' => $name), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1209;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera1209;
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
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__clone', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        $this->valueHoldera1209 = clone $this->valueHoldera1209;
    }

    public function __sleep()
    {
        $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, '__sleep', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;

        return array('valueHoldera1209');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4210 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4210;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4210 && ($this->initializerb4210->__invoke($valueHoldera1209, $this, 'initializeProxy', array(), $this->initializerb4210) || 1) && $this->valueHoldera1209 = $valueHoldera1209;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1209;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1209;
    }
}
