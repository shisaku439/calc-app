<?php

use function Livewire\Volt\{state, mount};

state(['num1', 'num2', 'operator', 'msg']);

mount(function () {
    switch ($this->operator) {
        case 'addition':
            $answer = $this->num1 + $this->num2;
            $this->msg = "{$this->num1} + {$this->num2} = {$answer}";
            break;
        case 'subtraction':
            $answer = $this->num1 - $this->num2;
            $this->msg = "{$this->num1} - {$this->num2} = {$answer}";
            break;
        case 'multiplication':
            $answer = $this->num1 * $this->num2;
            $this->msg = "{$this->num1} * {$this->num2} = {$answer}";
            break;
        case 'division':
            $answer = $this->num1 / $this->num2;
            $this->msg = "{$this->num1} / {$this->num2} = {$answer}";
            break;
        default:
            $answer = '無効な演算子です';
            $this->msg = "{$this->num1} ? {$this->num2} = {$answer}";
            break;
    }
});

?>

<div>
    <h1>計算結果</h1>
    <div>{{ $msg }}</div>
</div>
