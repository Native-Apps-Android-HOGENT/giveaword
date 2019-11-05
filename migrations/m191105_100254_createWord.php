<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m191105_100254_createWord
 */
class m191105_100254_createWord extends Migration {

    
     private $list = [
         "dog",
         "inchworm",
         "manatee",
         "Magical safety dragon"
         
     ];
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('word', [
            'id' => Schema::TYPE_PK,
            'description' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        // Add some example words
        foreach ($this->list as $word){
            $this->insert('word', ['description'=> $word]);
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('word');
        return true;
    }

    /*
      // Use up()/down() to run migration code without a transaction.
      public function up()
      {

      }

      public function down()
      {
      echo "m191105_100254_createWord cannot be reverted.\n";

      return false;
      }
     */
}
