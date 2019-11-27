<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ticket;

class TicketController extends Controller
{
    public function abiertosCerrados(){

      // Contadores Tickets Abiertos

      // ConsultaSQL

      $tkAbiertos=Ticket::where("tik_estado","=","A")->get();

      $tkATotal=count($tkAbiertos);

      $tkA7=0;

      $tkAAyer=0;

      $tkAHoy=0;

      foreach ($tkAbiertos as $ticket) {
        if ($ticket->attributes["tik_fechacreacion"] >= date("Y-m-d", strtotime("-1 week"))) {
          $tkA7=$tkA7+1;
        }
        if ($ticket->attributes["tik_fechacreacion"] >= date("Y-m-d", strtotime("-1 day"))) {
          $tkAAyer=$tkAAyer+1;
        }
        if ($ticket->attributes["tik_fechacreacion"] > date("Y-m-d")) {
          $tkAHoy=$tkAHoy+1;
        }
      }

      // Contadores Tickets Cerrados

      // ConsultaSQL

      // Cerrados por dia
      $tkCerrados=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCHoy=0;

      foreach ($tkCerrados as $ticket) {
        if ($ticket->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCHoy=$tkCHoy+1;
        }
      }

      // Cerrados Federico

      $tkCFedericoH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Federico")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCFederico=0;

      foreach ($tkCFedericoH as $ticketF) {
        if ($ticketF->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCFederico=$tkCFederico+1;
        }
      }

      // Cerrados Pablo

      $tkCPabloH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Pablo")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCPablo=0;

      foreach ($tkCPabloH as $ticketPa) {
        if ($ticketPa->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCPablo=$tkCPablo+1;
        }
      }

      // Cerrados Matias"Soporte"

      $tkCMatiasH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Soporte")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCMatias=0;

      foreach ($tkCMatiasH as $ticketM) {
        if ($ticketM->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCMatias=$tkCMatias+1;
        }
      }

      // Cerrados Esteban

      $tkCEstebanH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Esteban")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCEsteban=0;

      foreach ($tkCEstebanH as $ticketE) {
        if ($ticketE->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCEsteban=$tkCEsteban+1;
        }
      }

      // Cerrados Sebastian

      $tkCSebastianH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Sebastian")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCSebastian=0;

      foreach ($tkCSebastianH as $ticketS) {
        if ($ticketS->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCSebastian=$tkCSebastian+1;
        }
      }

      // Cerrados Juan

      $tkCJuanH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Juan")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCJuan=0;

      foreach ($tkCJuanH as $ticketJ) {
        if ($ticketJ->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCJuan=$tkCJuan+1;
        }
      }

      // Cerrados Ivonne

      $tkCIvonneH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Ivonne")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCIvonne=0;

      foreach ($tkCIvonneH as $ticketI) {
        if ($ticketJ->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCIvonne=$tkCIvonne+1;
        }
      }

      // Cerrados Rosana

      $tkCRosanaH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Rosana")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCRosana=0;

      foreach ($tkCRosanaH as $ticketR) {
        if ($ticketR->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCRosana=$tkCRosana+1;
        }
      }

      // Cerrados Patricia

      $tkCPatriciaH=Ticket::take(200)
          ->where("tik_estado","=","C")
          ->where("tik_usu","=","Patricia")
          ->orderBy("tik_fechacreacion", "desc")
          ->get();

      $tkCPatricia=0;

      foreach ($tkCPatriciaH as $ticketPr) {
        if ($ticketPr->attributes["tik_fechamodif"] >= date("Y-m-d")) {
          $tkCPatricia=$tkCPatricia+1;
        }
      }

      $tkC=[];


      $tkA["tkATotal"]=$tkATotal-$tkAHoy;

      $tkA["tkAHoy"]=$tkAHoy;

      $tkA["tkAAyer"]=$tkAAyer-$tkAHoy;

      $tkA["tkA7"]=$tkA7-$tkAHoy;

      $tkA["tkCHoy"]=$tkCHoy;

      $tkA["tkCFederico"]=$tkCFederico;

      $tkA["tkCMatias"]=$tkCMatias;

      $tkA["tkCPablo"]=$tkCPablo;

      $tkA["tkCEsteban"]=$tkCEsteban;

      $tkA["tkCSebastian"]=$tkCSebastian;

      $tkA["tkCJuan"]=$tkCJuan;

      $tkA["tkCIvonne"]=$tkCIvonne;

      $tkA["tkCRosana"]=$tkCRosana;

      $tkA["tkCPatricia"]=$tkCPatricia;

      // dd($tkCFederico);

      $vac=compact("tkA");

      return view("home", $vac);
    }
}
