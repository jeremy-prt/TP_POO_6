<?php

interface TextDataAccess {

  public function textOutput(array $To_export, string $To_file) : bool;

  public function textInput(array &$To_import, string $From_file) : bool;
}