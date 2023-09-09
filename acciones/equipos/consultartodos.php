<?php

require_once '../../modelo/Equipos.php';
require_once '../../modelo/Jugador.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');

$j1= new Jugador();
$j1->nombre = 'Pedro Gonzalez';
$j1->posicion = 'Delantero';
$j1->debut = '17 de agosto de  2005';
$j1->goles = '10';

$j2 = new Jugador();
$j2->nombre = 'Daniel Sanchez';
$j2->posicion = 'Delantero';
$j2->debut = '16 de diciembre de 2010';
$j2->goles = '0';

$j3 = new Jugador();
$j3->nombre ='Juan Perez';
$j3->posicion = 'Defensor';
$j3->debut = '17 de septiembre de 2019';
$j3->goles ='10';

$j4 =new Jugador();
$j4->nombre ='Ignacio Gonzalez';
$j4->posicion = 'Arquero';
$j4->debut = '17 de enero de 2020';
$j4->goles = '1';

$j5= new Jugador();
$j5->nombre = 'Ariel Cosentino';
$j5->posicion = 'Mediocampista';
$j5->debut = '16 de diciembre de 2001';
$j5->goles = '2';

$j6 = new Jugador();
$j6-> nombre ='Diego dominguez';
$j6->posicion ='Defensor';
$j6->debut = '15 de febrero de 2018';
$j6->goles = '5';

$j7 = new Jugador();
$j7->nombre = 'Gustavo Santos';
$j7->posicion = 'Delantero';
$j7->debut = '16 de diciembre de 2009';
$j7->goles = '3';



$e1 = new Equipo();
$e1->id = '1';
$e1->Nombre = 'Equipo 1';
$e1->ListJugadores = [$j1];
$e1->ListJugadores = [$j2];
$e1->ListJugadores = [$j3];
$e1->Fundacion ='3 de noviembre de 1903 (118 años)';
$e1->Presidente = 'Javier Perez';


$e2 = new Equipo();
$e2->id = '2';
$e2->Nombre = 'Equipo 2';
$e2->ListJugadores = [$j4];
$e2->ListJugadores = [$j5];
$e2->ListJugadores = [$j6];
$e2->ListJugadores = [$j7];
$e2->Fundacion ='5 de abril de 1923';
$e2->Presidente = 'Ignacio Quinteros';

echo json_encode($e1);
echo json_encode($e2);





