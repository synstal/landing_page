<?php

use yii\db\Migration;

/**
 * Class m181112_151020_client
 */
class m181112_151020_client extends Migration
{
    /**
     * {@inheritdoc}
     */
  public function Up()
    {
//       $this->dropTable('client');
        $this->createTable('client', [
            'id' => $this->primaryKey(),
//            'title' => $this->string()->notNull(),
//            'content' => $this->text(),
            'citycode' => $this->string()->notNull(),
            'firstname' => $this->string()->notNull(),
            'lastname' => $this->string()->notNull(),
            'middlename' => $this->string()->notNull(),
            'birthday' => $this->date('Y-m-d')->notNull(), 
	    'tel' => $this->string(11)->notNull(),
	    'email' => $this->string()->notNull(),
//            'datec' => $this->datetime('Y-m-d H-i-s')->notNull()->defaultValue(['expression'=>'NOW()']),
            'datec' => $this->datetime('Y-m-d H-i-s')->notNull(),
	    'ip' => $this->string()->notNull(),
            'headinfo' => $this->string()->notNull(),   
    ]);

    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('client');
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181112_151020_client cannot be reverted.\n";

        return false;
    }
    */
}
