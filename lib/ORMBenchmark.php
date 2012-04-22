<?php
/**
 * Benchmark test case for ORM
 * 
 * @author Yuki Matsukura
 */
class ORMBenchmark
{
  /** preserve ORM ID for output */
  private $name;
  
  /** preserve start time as float */
  private $starttime;
  
  /** preserve end time as float */
  private $endtime;
  
  public function __construct($name)
  {
    $this->name = $name;
  }
  
  /**
   * Call to start benchmark 
   * 
   */
  public function start()
  {
    $this->starttime = microtime(true);
  }
  
  /**
   * Call to stop benchmark
   * 
   */
  public function finish()
  {
     $this->endtime = microtime(true);
  }
  
  /**
   * Print result
   * 
   */
  public function printResult()
  {
    print sprintf("%s\t%F\t%d\n", $this->name, $this->endtime - $this->starttime, memory_get_peak_usage());
  }
  
}