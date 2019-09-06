<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/26 13341007105@163.com
 * Time: 15:10
 */
namespace DesignPatterns\Pool;
use Countable;

/**
 * Class WorkerPool
 * @package DesignPatterns\Pool
 */
class WorkerPool implements Countable
{
    /**
     * 使用中的对象
     * @var TestDbWorker[]
     */
    private $inUseWorkers = [];

    /**
     * 待使用的对象
     * @var TestDbWorker[]
     */
    private $waitUsedWorkers = [];

    /**
     * 获取一个对象
     * @return TestDbWorker
     */
    public function get(): TestDbWorker
    {
        if (count($this->waitUsedWorkers) == 0) {
            $worker = new TestDbWorker();
        } else {
            $worker = array_pop($this->waitUsedWorkers);
        }

        $this->inUseWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * 恢复object
     * @param TestDbWorker $worker
     */
    public function dispose(TestDbWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->inUseWorkers[$key])) {
            unset($this->inUseWorkers[$key]);
            $this->waitUsedWorkers[$key] = $worker;
        }
    }

    /**
     * 对象池总数
     * @return int
     */
    public function count(): int
    {
        return count($this->inUseWorkers) + count($this->waitUsedWorkers);
    }
}