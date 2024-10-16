<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries()
    {
        $series = [
            'The 100',
            'The Walking Dead',
            'Breaking Bead'
        ];
        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';
        echo $html;
    }
}