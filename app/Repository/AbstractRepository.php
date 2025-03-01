<?php

namespace App\Repository;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    public function __construct(protected Model $model)
    {
    }

    public function insert(array $data): Model
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $model = $this->model::find($id);
        return $model?->update($data) ?? false;
    }

    public function delete(int $id): bool
    {
        $record = $this->find($id);
        return $record->delete();
    }

    public function find(int $id): Model
    {
        return $this->model::find($id);
    }

    public function filter(array $filter): Collection
    {
        return $this->model->where($filter)->get();
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model::paginate($perPage);
    }

    public function all(): Collection
    {
        return $this->model::all();
    }
}
