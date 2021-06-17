<?php


use Phinx\Seed\AbstractSeed;

class AdminSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data[] = [
            'username' => 'Doughnut_Lover',
            'first_name'    => 'Homer' ,
            'last_name'    => 'Simpson',
            'email' =>  'HSimpson@gmail.com',
            'password' => password_hash("password", PASSWORD_DEFAULT),
            'updated' => NULL,
        ];
        $this->table('admin')->insert($data)->saveData();
    }
}
