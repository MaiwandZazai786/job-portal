<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('job_listing', function (Blueprint $table) {
            $table->foreignId('employer_id')
                ->nullable()
                ->constrained('employers', 'id')
            ;
        });
    }

    public function down(): void
    {
        Schema::table('job_listing', function (Blueprint $table) {
            $table->removeColumn('employer_id');
        });
    }
};
