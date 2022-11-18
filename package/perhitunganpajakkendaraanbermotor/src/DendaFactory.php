<?php

class DendaFactory implements PajakKendaraanAbstractFactory
{
  public function createDenda(): Denda
  {
    return new DendaSatuBulan();
  }
}
