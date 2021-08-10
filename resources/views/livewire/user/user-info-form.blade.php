<div>
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();

    $table->string('password')->nullable();
    $table->rememberToken();
    $table->foreignId('current_team_id')->nullable();
    $table->text('profile_photo_path')->nullable();

    $table->string('facebook_id')->nullable();
    $table->string('facebook_token')->nullable();
    $table->string('instagram_id')->nullable();
    $table->string('google_id')->nullable();
    $table->timestamps();

    $table->string('username')->nullable();
    $table->date('birthday')->nullable();
    $table->text('avatar')->nullable();
    $table->enum('gender',['male','female'])->nullable();
    $table->string('profession')->nullable();
    $table->text('biography')->nullable();
    $table->decimal('price_hour')->nullable();

    $table->string('role')->default('user');
    $table->boolean('preferences_verified')->default(false);

</div>