<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $this->db->table('customers')->insertBatch([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917 123 4567', 'created_at' => $now],
            ['full_name' => 'John Reyes', 'email' => 'john.reyes@example.com', 'phone' => '0918 234 5678', 'created_at' => $now],
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0919 345 6789', 'created_at' => $now],
            ['full_name' => 'Carlo Mendoza', 'email' => 'carlo.mendoza@example.com', 'phone' => '0920 456 7890', 'created_at' => $now],
            ['full_name' => 'Sofia Garcia', 'email' => 'sofia.garcia@example.com', 'phone' => '0921 567 8901', 'created_at' => $now],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'admin01', 'full_name' => 'Rainier Ian Sayson', 'created_at' => $now],
            ['username' => 'cashier01', 'full_name' => 'Ella Dela Cruz', 'created_at' => $now],
            ['username' => 'cashier02', 'full_name' => 'Miguel Ramos', 'created_at' => $now],
            ['username' => 'manager01', 'full_name' => 'Patricia Lim', 'created_at' => $now],
            ['username' => 'staff01', 'full_name' => 'Daniel Flores', 'created_at' => $now],
        ]);
    }
}
