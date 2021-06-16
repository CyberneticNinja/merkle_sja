<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class UserMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $users = $this->table('users');
        $users->addColumn('first_name', 'string', ['limit' => 20])
              ->addColumn('last_name', 'string', ['limit' => 40])
              ->addColumn('address1', 'string', ['limit' => 191])
              ->addColumn('address2', 'string', ['limit' => 100])
              ->addColumn('city', 'string', ['limit' => 30])
              ->addColumn('state', 'string', ['limit' => 2])
              ->addColumn('zip', 'string', ['limit' => 9])
              ->addColumn('country', 'string', ['limit' => 191,'default' => 'US'])
              ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
              ->addColumn('updated', 'datetime', ['null' => true])
              ->create();
    }
}
