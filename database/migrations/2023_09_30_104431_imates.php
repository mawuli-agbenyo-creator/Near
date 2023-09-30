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
        Schema::create('imates', function (Blueprint $table) {
            $table->id();
            $table->string('External_inmateID')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('photo')->nullable();
            $table->string('contact')->nullable();
            $table->string('occupation')->nullable();
            $table->string('dateofBirth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('cityTown')->nullable();
            $table->string('landMark')->nullable();
            $table->string('district')->nullable();
            $table->string('nationalID')->nullable();
            $table->string('age')->nullable();
            $table->date('date')->nullable();
            $table->string('personalBelongings')->nullable();
            $table->string('personalPhoto')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('eyeColor')->nullable();
            $table->string('skinTone')->nullable();
            $table->string('hairColor')->nullable();
            $table->string('inmateID')->nullable();
            $table->string('cellAssignment')->nullable();
            $table->string('securityClassification')->nullable();
            $table->string('custodialStatus')->nullable();
            $table->date('admissionDate')->nullable();
            $table->string('arrestingAgency')->nullable();
            $table->string('arrestingOfficer')->nullable();
            $table->string('chargesFiled')->nullable();
            $table->string('sentence')->nullable();
            $table->string('caseNumbers')->nullable();
            $table->string('attorneyName')->nullable();
            $table->string('attorneyContact')->nullable();
            $table->string('medicalConditions')->nullable();
            $table->string('allergies')->nullable();
            $table->string('emergencyPerson')->nullable();
            $table->string('emergencyPhone')->nullable();
            $table->string('emergencyRelationship')->nullable();
            $table->string('nextofkin')->nullable();
            $table->string('nextofkinRelationship')->nullable();
            $table->string('nextofkinPhone')->nullable();
            $table->string('medications')->nullable();
            $table->string('specialNeeds')->nullable();
            $table->string('approvedVisitors')->nullable();
            $table->string('disciplinaryActions')->nullable();
            $table->string('educationalLevel')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('houseNumber')->nullable();
            $table->string('digitalAddress')->nullable();
            $table->string('mothersContact')->nullable();
            $table->string('fathersContact')->nullable();
            $table->string('spouseName')->nullable();
            $table->string('spouseContact')->nullable();
            $table->integer('noSiblings')->nullable();
            $table->string('eyebrowLength')->nullable();
            $table->string('bodyStature')->nullable();
            $table->string('tatooDescription')->nullable();
            $table->string('noseType')->nullable();
            $table->string('eyeSize')->nullable();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imates');
    }
};
