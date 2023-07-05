<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

    $role1 = Role::create(['name' => 'docente']);
    $role2 = Role::create(['name' => 'apoderado']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
