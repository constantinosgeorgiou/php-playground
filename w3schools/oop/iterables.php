<?php

class MyIterator implements Iterator
{
    private $items = [];
    private $pointer = 0;

    public function __construct($items)
    {
        $this->items = array_values($items);
    }

    public function current(): mixed
    {
        return $this->items[$this->pointer];
    }

    public function key(): mixed
    {
        return $this->pointer;
    }

    public function next(): void
    {
        $this->pointer++;
    }
    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function valid(): bool
    {
        // count() indicates how many items are in the list
        return $this->pointer < count($this->items);
    }
}

// A function that uses iterables
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
printIterable($iterator);
