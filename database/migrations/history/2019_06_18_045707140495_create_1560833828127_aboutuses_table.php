<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1560833828127AboutusesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('aboutuses')) {
            Schema::create('aboutuses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('company_name');
                $table->longText('text_area');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('aboutuses');
    }
}
