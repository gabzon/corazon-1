<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    $table->string('facebook')->nullable()->unique();
    $table->string('instagram')->nullable()->unique();
    $table->string('youtube')->nullable()->unique();
    $table->string('tiktok')->nullable()->unique();
    $table->string('twitter')->nullable()->unique();
</div>