<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1560853374633ContactCompaniesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('contact_companies');
    }
}
