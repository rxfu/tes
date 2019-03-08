<?php

namespace App\Repositories;

use Exception;
use Illuminate\Support\Str;

class Repository {

	protected $object;

	public function __construct($object = null) {
		$this->object = $object;
	}

	public function getObject() {
		return $this->object;
	}

	public function getTable() {
		return $this->object->getTable();
	}

	public function getAttributes() {
		return $this->object->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
	}

	public function getModel() {
		return Str::singular($this->getTable());
	}

	public function getAll() {
		return $this->object->orderBy($this->object->getKeyName())->get();
	}

	public function get($id) {
		try{
			return $this->object->findOrFail($id);
		} catch (Exception $e) {
			throw $e;
		}
	}

	public function store($data) {
		$this->object->fill($data);

		return $this->object->save();
	}

	public function update($id, $data) {
		try {
			$object = $this->get($id);
			$object->fill($data);

			return $this->object->saveOrFail();
		} catch (Exception $e) {
			throw $e;
		}
	}

	public function delete($id) {
		try {
			$object = $this->get($id);

			return $object->delete();
		} catch (Exception $e) {
			throw $e;
		}
	}

	public function batchDelete($ids) {
		try {
			foreach ($ids as $id) {				
				$object = $this->get($id);

				$object->delete();
			}
		} catch (Exception $e) {
			throw $e;
		}
	}
}