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
        Schema::table('orders', function (Blueprint $table) {
            // Add user_id column if it doesn't exist
            if (!Schema::hasColumn('orders', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->after('id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            }
            
            // Add slug column if it doesn't exist
            if (!Schema::hasColumn('orders', 'slug')) {
                $table->string('slug')->unique()->after('email');
            }
            
            // Add transaction_reference column if it doesn't exist
            if (!Schema::hasColumn('orders', 'transaction_reference')) {
                $table->string('transaction_reference')->unique()->after('delivery_status');
            }
        });
        
        // Check if postal_code exists and make it nullable
        if (Schema::hasColumn('orders', 'postal_code')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->string('postal_code')->nullable()->change();
            });
        }
        
        // Update payment_method to include 'transfer' if column exists
        if (Schema::hasColumn('orders', 'payment_method')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('payment_method');
            });
            
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('payment_method', ['cash_on_delivery', 'card', 'transfer'])->after('country');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
            
            if (Schema::hasColumn('orders', 'slug')) {
                $table->dropColumn('slug');
            }
            
            if (Schema::hasColumn('orders', 'transaction_reference')) {
                $table->dropColumn('transaction_reference');
            }
        });
        
        if (Schema::hasColumn('orders', 'payment_method')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('payment_method');
            });
            
            Schema::table('orders', function (Blueprint $table) {
                $table->enum('payment_method', ['cash_on_delivery', 'card'])->after('country');
            });
        }
    }
};