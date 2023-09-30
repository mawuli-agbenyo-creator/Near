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
            $table->string('External_inmateID');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('photo');
            $table->string('contact');
            $table->string('occupation');
            $table->string('dateofBirth');
            $table->string('nationality');
            $table->string('cityTown');
            $table->string('landMark');
            $table->string('district');
            $table->string('nationalID');
            $table->string('age');
            $table->date('date');
            $table->string('personalBelongings')->nullable();
            $table->string('personalPhoto');
            $table->integer('height');
            $table->integer('weight');
            $table->string('eyeColor');
            $table->string('skinTone');
            $table->string('hairColor');
            $table->string('inmateID');
            $table->string('cellAssignment');
            $table->string('securityClassification');
            $table->string('custodialStatus');
            $table->date('admissionDate');
            $table->string('arrestingAgency');
            $table->string('arrestingOfficer');
            $table->string('chargesFiled');
            $table->string('sentence');
            $table->string('caseNumbers');
            $table->string('attorneyName');
            $table->string('attorneyContact');
            $table->string('medicalConditions');
            $table->string('allergies');
            $table->string('emergencyPerson');
            $table->string('emergencyPhone');
            $table->string('emergencyRelationship');
            $table->string('nextofkin');
            $table->string('nextofkinRelationship');
            $table->string('medications')->nullable();
            $table->string('specialNeeds')->nullable();
            $table->string('approvedVisitors')->nullable();
            $table->string('disciplinaryActions')->nullable();
            $table->string('educationalLevel');
            $table->string('religion');
            $table->string('gender');
            $table->string('maritalStatus');
            $table->string('houseNumber');
            $table->string('digitalAddress');
            $table->string('mothersContact');
            $table->string('fathersContact');
            $table->string('spouseName');
            $table->string('spouseContact');
            $table->integer('noSiblings');
            $table->string('eyebrowLength');
            $table->string('bodyStature');
            $table->string('tatooDescription');
            $table->string('noseType');
            $table->string('eyeSize');
           
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
