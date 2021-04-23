<?php

use yii\db\Migration;

/**
 * Class m210423_052348_place
 */
class m210423_052348_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('address', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        $this->createTable('place', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'organization' => $this->string(),
            'supervisor' => $this->string(),
            'id_address' => $this->integer()
        ]);

        $this->addForeignKey(
            'place_to_address',
            'place',
            'id_address',
            'address',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('address');
        $this->dropTable('place');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210423_052348_place cannot be reverted.\n";

        return false;
    }
    */
}
