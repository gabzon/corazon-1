<div>
    {{-- Do your work, then step back. --}}
    $table->string('mobile')->nullable();
    $table->string('phone')->nullable();
    $table->timestamp('mobile_verified_at')->nullable();
    $table->timestamp('phone_verified_at')->nullable();
</div>