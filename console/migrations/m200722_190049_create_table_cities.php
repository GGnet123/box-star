<?php

use yii\db\Migration;

/**
 * Class m200722_190049_create_table_cities
 */
class m200722_190049_create_table_cities extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cities}}', [
            'id' => $this->primaryKey(),
            'state_id' => $this->integer(),
            'title' => $this->string()
        ], $tableOptions);

        $this->addForeignKey(
            'fk-state_id',
            'cities',
            'state_id',
            'states',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-state_id', 'cities');
        $this->dropTable('cities');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200722_190049_create_table_cities cannot be reverted.\n";

        return false;
    }
    */
}
