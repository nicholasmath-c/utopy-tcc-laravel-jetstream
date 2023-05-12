<?php
namespace App\Exceptions;
use Arremessável; 
use Illuminate\Foundation\Exceptions\Handler como ExceptionHandler;
class Handler extends ExceptionHandler 
{ 
   // use Throwable - você NÃO deve importar a classe Throwable como uma característica aqui. Você precisa apenas importá-lo acima da classe
    public function report(Throwable $exception) 
    { 
        pai::report($exception); 
    }
    public function render($request, Throwable $exception) 
    { 
        return parent::render($request, $exception); 
    }
}