<?php
/**
 * Created by Anders.
 * User: carlosanders
 * Date: 20/11/16
 * Time: 17:07
 * Essa Classe Herda do ControllerMakeCommand do Laravel
 * Para funcionar nessa metodologia tem que registrar essa
 * classe na classe ConsoleKernel.php
 */

namespace App\Support\Console;

use Illuminate\Routing\Console\ControllerMakeCommand as LaravelControllerMakeCommad;

class ControllerMakeCommand extends LaravelControllerMakeCommad
{
    /**
     * Metdo foi a sobrescrito do metodo default que registrava
     * os controllers dentro da pasta App\Htttp\Controllers, de modo que
     * eh possivel criar um controller em qualquer parte da aplicacao.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }
}
