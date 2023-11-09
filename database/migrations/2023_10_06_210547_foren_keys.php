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
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete()->after('code_snip');
            $table->foreignId('lang_id')->constrained('langs')->cascadeOnUpdate()->cascadeOnDelete()->after('user_id');
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete()->after('comment');
            $table->foreignId('post_id')->constrained('posts')->cascadeOnUpdate()->cascadeOnDelete()->after('user_id');
        });
        //foren keys for like table
        Schema::table('likes', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete()->after('id');
            $table->foreignId('post_id')->constrained('posts')->cascadeOnUpdate()->cascadeOnDelete()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //down funtion
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['lang_id']);
        });
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['post_id']);
        });
        //foren keys for like table
        Schema::table('likes', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['post_id']);
        });
    }
};
