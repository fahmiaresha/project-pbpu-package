<?php

interface PajakKendaraanAbstractFactory
{
  public function createDendaSatuBulan(): Denda;
  public function createDendaDuaBulan(): Denda;
  public function createDendaEnamBulan(): Denda;
  public function createDendaSatuTahun(): Denda;
  public function createDendaDuaTahun(): Denda;
}
