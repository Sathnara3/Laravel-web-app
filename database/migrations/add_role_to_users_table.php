public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('role')->default('user'); // 'admin' or 'user'
    });
}