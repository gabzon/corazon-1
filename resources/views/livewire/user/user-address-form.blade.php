<div>
    {{-- Success is as dangerous as failure. --}}
    $table->string('address')->nullable();
    $table->string('address_info')->nullable();
    $table->string('postal_code')->nullable();
    $table->string('city')->nullable();
    $table->string('state')->nullable();
    $table->string('country')->nullable();
    $table->decimal('lat', 10, 8)->nullable();
    $table->decimal('lng', 11, 8)->nullable();
</div>