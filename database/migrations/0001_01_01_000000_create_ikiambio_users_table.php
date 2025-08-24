<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('ikiambio_users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('utplId')->unique()->nullable();
            $table->string('firstName');                  // NOT NULL
            $table->string('lastName');                   // NOT NULL
            $table->string('identification')->unique()->nullable();
            $table->string('username')->unique();         // NOT NULL
            $table->string('password')->nullable();
            $table->string('type', 50)->nullable();

            // Fechas (usamos timestamp con zona horaria en Postgres)
            $table->timestampTz('createdDate')->nullable();
            $table->timestampTz('modifiedDate')->nullable();
            $table->timestampTz('lastLogin')->nullable();

            // char(1)
            $table->char('genere', 1)->nullable();

            // Relaciones
            // modifiedBy -> asumiendo que referencia a tabla 'users'
            $table->foreignId('modified_by_id')
                  ->nullable()
                  ->constrained('users')
                  ->nullOnDelete(); // si borran el usuario, deja NULL

            

            // Booleans
            $table->boolean('rolePermissionsUpdated')->default(false);
            $table->boolean('active')->default(true);

            // Índices útiles
            $table->index(['lastLogin']);
            $table->index(['active']);
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('ikiambio_users');
    }
};
