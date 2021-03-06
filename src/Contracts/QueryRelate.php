<?php

namespace CrCms\Repository\Contracts;

/**
 * Interface QueryRelate
 *
 * @package CrCms\Repository\Contracts
 */
interface QueryRelate
{
    /**
     * @param array $column
     * @return QueryRelate
     */
    public function select(array $column = ['*']): QueryRelate;

    /**
     * @param string $expression
     * @param array $bindings
     * @return QueryRelate
     */
    public function selectRaw(string $expression, array $bindings = []): QueryRelate;

    /**
     * @param int $limit
     * @return QueryRelate
     */
    public function skip(int $limit): QueryRelate;

    /**
     * @param int $limit
     * @return QueryRelate
     */
    public function take(int $limit): QueryRelate;

    /**
     * @param string $column
     * @return QueryRelate
     */
    public function groupBy(string $column): QueryRelate;

    /**
     * @param array $columns
     * @return QueryRelate
     */
    public function groupByArray(array $columns): QueryRelate;

    /**
     * @param string $column
     * @param string $sort
     * @return QueryRelate
     */
    public function orderBy(string $column, string $sort = 'desc'): QueryRelate;

    /**
     * @param array $columns
     * @return QueryRelate
     */
    public function orderByArray(array $columns): QueryRelate;

    /**
     * @return QueryRelate
     */
    public function distinct(): QueryRelate;

    /**
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @return QueryRelate
     */
    public function where(string $column, $operator = null, $value = null): QueryRelate;

    /**
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @return QueryRelate
     */
    public function orWhere(string $column, $operator = null, $value = null): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function whereClosure(\Closure $callback): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function orWhereClosure(\Closure $callback): QueryRelate;

    /**
     * @param string $column
     * @param array $between
     * @return QueryRelate
     */
    public function whereBetween(string $column, array $between): QueryRelate;

    /**
     * @param string $column
     * @param array $between
     * @return QueryRelate
     */
    public function orWhereBetween(string $column, array $between): QueryRelate;

    /**
     * @param string $sql
     * @param array $bindings
     * @return QueryRelate
     */
    public function whereRaw(string $sql, array $bindings = []): QueryRelate;

    /**
     * @param string $sql
     * @param array $bindings
     * @return QueryRelate
     */
    public function orWhereRaw(string $sql, array $bindings = []): QueryRelate;

    /**
     * @param $column
     * @param array $between
     * @return QueryRelate
     */
    public function orWhereNotBetween($column, array $between): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function whereExists(\Closure $callback): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function orWhereExists(\Closure $callback): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function whereNotExists(\Closure $callback): QueryRelate;

    /**
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function orWhereNotExists(\Closure $callback): QueryRelate;

    /**
     * @param string $column
     * @param array $values
     * @return QueryRelate
     */
    public function whereIn(string $column, array $values): QueryRelate;

    /**
     * @param string $column
     * @param array $values
     * @return QueryRelate
     */
    public function orWhereIn(string $column, array $values): QueryRelate;

    /**
     * @param string $column
     * @param array $values
     * @return QueryRelate
     */
    public function whereNotIn(string $column, array $values): QueryRelate;

    /**
     * @param string $column
     * @param array $values
     * @return QueryRelate
     */
    public function orWhereNotIn(string $column, array $values): QueryRelate;

    /**
     * @param string $column
     * @return QueryRelate
     */
    public function whereNull(string $column): QueryRelate;

    /**
     * @param string $column
     * @return QueryRelate
     */
    public function orWhereNull(string $column): QueryRelate;

    /**
     * @param string $column
     * @return QueryRelate
     */
    public function whereNotNull(string $column): QueryRelate;

    /**
     * @param string $column
     * @return QueryRelate
     */
    public function orWhereNotNull(string $column): QueryRelate;

    /**
     * @param string $sql
     * @return QueryRelate
     */
    public function raw(string $sql): QueryRelate;

    /**
     * @param string $table
     * @return QueryRelate
     */
    public function from(string $table): QueryRelate;

    /**
     * @param string $table
     * @param string $one
     * @param string $operator
     * @param string $two
     * @return QueryRelate
     */
    public function join(string $table, string $one, string $operator = '=', string $two = ''): QueryRelate;

    /**
     * @param string $table
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function joinClosure(string $table, \Closure $callback): QueryRelate;

    /**
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $two
     * @return QueryRelate
     */
    public function leftJoin(string $table, string $first, string $operator = '=', string $two = ''): QueryRelate;

    /**
     * @param string $table
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function leftJoinClosure(string $table, \Closure $callback): QueryRelate;

    /**
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $two
     * @return QueryRelate
     */
    public function rightJoin(string $table, string $first, string $operator = '=', string $two = ''): QueryRelate;

    /**
     * @param string $table
     * @param \Closure $callback
     * @return QueryRelate
     */
    public function rightJoinClosure(string $table, \Closure $callback): QueryRelate;

    /**
     * @param callable $callable
     * @return QueryRelate
     */
    public function callable(callable $callable): QueryRelate;

    /**
     * @param array $array
     * @return QueryRelate
     */
    public function whereArray(array $array): QueryRelate;

    /**
     * @param QueryRelate $queryRelate
     * @param bool $unionAll
     * @return QueryRelate
     */
    public function union(QueryRelate $queryRelate, bool $unionAll = true): QueryRelate;

    /**
     * @param QueryMagic $queryMagic
     * @return QueryRelate
     */
    public function magic(QueryMagic $queryMagic): QueryRelate;

    /**
     * @param QueryMagic|null $queryMagic
     * @return QueryRelate
     */
    public function whenMagic(?QueryMagic $queryMagic = null): QueryRelate;

    /**
     * @param bool $condition
     * @param callable $trueCallable
     * @param callable $falseCallable
     * @return QueryRelate
     */
    public function when(bool $condition, callable $trueCallable, callable $falseCallable): QueryRelate;

    /**
     * @param array $conditions
     * @param array $callables
     * @return QueryRelate
     */
    public function whenMultiple(array $conditions, array $callables): QueryRelate;

    /**
     * @param array $relations
     * @return QueryRelate
     */
    public function withArray(array $relations): QueryRelate;

    /**
     * @param string $relation
     * @return QueryRelate
     */
    public function with(string $relation): QueryRelate;

    /**
     * @param array $relations
     * @return QueryRelate
     */
    public function withoutArray(array $relations): QueryRelate;

    /**
     * @param string $relation
     * @return QueryRelate
     */
    public function without(string $relation): QueryRelate;
}