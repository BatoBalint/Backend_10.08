<?php
  class Allat {
    private $nev;
    private $fajta;
    private $orokbefogadva;

    public function getNev() {
      return $this->nev;
    }

    public function setNev(string $ujNev) {
      if(empty(trim($ujNev))) {
        throw new Exception("A nev nem lehet ures.");
      }
      $this->nev = $ujNev;
    }

    public function getFajta() {
      return $this->fajta;
    }

    public function getOrokbefogadva() {
      return $orokbefogadva->format("c");
    }

    public function __construct(string $_nev, string $_faj) {
      if (empty(trim($_nev))) {
        throw new Exception("Nev nem lehet ures.");
      }
      $this->nev = $_nev;
      if (empty(trim($_faj))) {
        throw new Exception("Faj nem lehet ures.");
      }
      $this->fajta = $_faj;
      $this->orokbefogadva = new DateTime();
    }
  }
?><!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $kutya = new Allat("Ferenc", "Vizsla");
      echo $kutya->getNev();
      echo $kutya->getFajta();
      echo $kutya->getOrokbefogadva();
    ?>
  </body>
</html>
