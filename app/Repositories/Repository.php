<?php

namespace App\Repositories;

use App\Exceptions\InternalException;
use App\Exceptions\InvalidRequestException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

abstract class Repository
{
    protected $object;

    public function __construct($object = null)
    {
        $this->object = $object;
    }

    public function __call($method, $parameters)
    {
        return $this->object->$method(...$parameters);
    }

    public function getTable()
    {
        return $this->object->getTable();
    }

    public function getAttributes()
    {
        return $this->object->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }

    public function getModel()
    {
        return basename(str_replace('\\', '/', get_class($this->object)));
    }

    public function find($id)
    {
        try {
            return $this->object->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new InternalException($this->getModel() . ': ' . $id . ' 对象不存在', $this->object, 'find', $e);
        }
    }

    public function findAll()
    {
        return $this->object->all();
    }

    public function store($attributes)
    {
        try {
            $attributes = is_array($attributes) ? $attributes : [$attributes];
            $object = $this->object->create($attributes);
    
            if (!$object) {
                throw new InvalidRequestException($this->getModel() . ' 对象创建失败', $this->object, 'store');
            } else {
                return $object;
            }
        } catch (QueryException $e) {
            throw new InternalException($this->getModel() . ' 对象创建错误', $this->object, 'store', $e);
        }
    }

    public function update($id, $attributes)
    {
        $object = $this->find($id);
        $attributes = is_array($attributes) ? $attributes : [$attributes];

        if (false === $object->update($attributes)) {
            throw new InvalidRequestException($this->getModel() . ': ' . $id . ' 对象更新失败', $this->object, 'update');
        }

        return $object;
    }

    public function delete($id)
    {
        $object = $this->find($id);
        $success = $object->delete();

        if (is_null($success) || (false === $success)) {
            throw new InvalidRequestException($this->getModel() . ': ' . $id . ' 对象删除失败', $this->object, 'delete');
        }
    }

    public function deleteAll($ids)
    {
        $ids = is_array($ids) ? $ids : [$ids];

        foreach ($ids as $id) {
            $this->delete($id);
        }
    }
}
