<?php
/**
 * Joinable.php
 *
 * @copyright Chongyi <xpz3847878@163.com>
 * @link      https://insp.top
 */

namespace Dybasedev\Keeper\Data\SQLDatabase\Query\Traits;


trait Joinable
{
    public function leftJoin($table, $condition, $operatorOrTarget = null, $target = null)
    {
        return $this->join($table, $condition, $operatorOrTarget, $target, 'left');
    }

    public function rightJoin($table, $condition, $operatorOrTarget = null, $target = null)
    {
        return $this->join($table, $condition, $operatorOrTarget, $target, 'right');
    }

    public function innerJoin($table, $condition, $operatorOrTarget = null, $target = null)
    {
        return $this->join($table, $condition, $operatorOrTarget, $target, 'inner');
    }

    public function join($table, $condition, $operatorOrTarget = null, $target = null, $mode = 'join')
    {


        return $this;
    }

    abstract protected function addStatementStructure($key, $type, $structure = null, $bindings = null);
}