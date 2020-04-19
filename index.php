<?php
class Stack {
    protected $stack ;
    protected $limit ;
    protected $count=-1;
    public function __construct($arr , $limit)
    {
        if (is_array($arr)){
            $this->stack=$arr;
        }else{
            $this->stack=[];
        }
        if (is_integer($limit)){
            $this->limit=$limit;
        }else{
            $this->limit=10;
        }
    }
    public function push($value){
        if ($this->isEmpty()){
            array_push($this->stack,$value);
            $this->count++;
        }else{
            die("full data ");
        }
    }
    public function pop(){
        unset($this->stack[$this->count--]);
    }
    public function isEmpty(){
        if (count($this->stack)>=$this->limit){
            echo "please pop the data ";
            return false;
        }else{
            return true;
        }
    }
    public function top(){
        return current($this->stack);
    }
    public function reverse(){
        rsort($this->stack);
    }
}
$stack = new Stack($arr= [],5);
$stack->push("hello");
$stack->push("my name");
$stack->push("is tuan anh");
$stack->push("i am 20 year old");
$stack->push("you can call me an hacker ");
//$stack->push("this will make my program error please dont ");
//$stack->pop();
//$stack->pop();
$stack->reverse();
var_dump($stack);