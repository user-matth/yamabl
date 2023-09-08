<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCondominiaToCondominiumTable extends Migration
{
    public function up()
    {
        Schema::rename('condominia', 'condominium');
    }

    public function down()
    {
        Schema::rename('condominium', 'condominia');
    }
}
