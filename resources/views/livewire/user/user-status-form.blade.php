<div>
    {{-- Stop trying to control. --}}
    $table->string('work_status')->default('working');
    $table->string('unemployement_proof')->nullable();
    $table->date('unemployement_expiry_date')->nullable();
    $table->boolean('work_status_verified')->nullable();
</div>