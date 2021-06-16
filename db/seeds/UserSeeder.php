<?php


use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
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

        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) {

            //randomaly generate if the zip is going to be 9 or 5 digits
            $zip = '';
            if(rand(1,2) == 1)
            {
                $zip = rand(11111,99999);
            }
            else
            {
                $zip = rand(111111111,999999999);
            }

            $data[] = [
                'first_name'    => $faker->firstName() ,
                'last_name'    => $faker->lastName(),
                'address1'    => $faker->streetAddress(),
                'address2'    => '',
                'city'    => $faker->city(),
                'state'    => $faker->stateAbbr(),
                'zip'    => $zip,
                // 'created' => date('Y-m-d H:i:s'),
                'updated' => NULL,
            ];
        }
        $this->table('users')->insert($data)->saveData();
    }
}
