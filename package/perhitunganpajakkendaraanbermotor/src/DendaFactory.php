<?php

class DendaFactory implements PajakKendaraanAbstractFactory
{
  public function createDendaSatuBulan(): Denda
  {
    return new DendaSatuBulan();
  }

  public function createDendaDuaBulan(): Denda
  {
    return new DendaDuaBulan();
  }

  public function createDendaEnamBulan(): Denda
  {
    return new DendaEnamBulan();
  }

  public function createDendaSatuTahun(): Denda
  {
    return new DendaSatuTahun();
  }

  public function createDendaDuaTahun(): Denda
  {
    return new DendaDuaTahun();
  }
}
