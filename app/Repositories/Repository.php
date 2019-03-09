<?php

namespace App\Repositories;

use Exception;
use Illuminate\Support\Str;

class Repository
{
    protected $object;

    public function __construct($object = null)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
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
        return Str::singular($this->getTable());
    }

    public function getAll()
    {
        return $this->object->orderBy($this->object->getKeyName())->get();
    }

    public function get($id)
    {
        return $this->object->findOrFail($id);
    }

    public function store($data)
    {
        $this->object->fill($data);

        return $this->object->save();
    }

    public function update($id, $data)
    {
        $this->object = $this->get($id);
        $this->object->fill($data);

        return $this->object->save();
    }

    public function delete($id)
    {
        $this->object = $this->get($id);

        return $this->object->delete();
    }

    public function batchDelete($ids)
    {
        foreach ($ids as $id) {
            $this->object = $this->get($id);

            $this->object->delete();
        }
    }
}
