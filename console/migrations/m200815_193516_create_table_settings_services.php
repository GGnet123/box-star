<?php

use yii\db\Migration;

/**
 * Class m200815_193516_create_table_settings_services
 */
class m200815_193516_create_table_settings_services extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings_services', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings_services');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200815_193516_create_table_settings_services cannot be reverted.\n";

        return false;
    }
    */
}
