<?php

use yii\db\Migration;

/**
 * Class m200815_193453_create_table_settings_partner_logos
 */
class m200815_193453_create_table_settings_partner_logos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings_partners', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'logo' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings_partners');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200815_193453_create_table_settings_partner_logos cannot be reverted.\n";

        return false;
    }
    */
}
