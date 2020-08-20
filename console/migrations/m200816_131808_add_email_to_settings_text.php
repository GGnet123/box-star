<?php

use yii\db\Migration;

/**
 * Class m200816_131808_add_email_to_settings_text
 */
class m200816_131808_add_email_to_settings_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('settings_text', 'contact_email', $this->string());
        $this->addColumn('settings_text', 'location', $this->string());
        $this->addColumn('settings_text', 'business_hours', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('settings_text', 'contact_email');
        $this->dropColumn('settings_text', 'location');
        $this->dropColumn('settings_text', 'business_hours');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200816_131808_add_email_to_settings_text cannot be reverted.\n";

        return false;
    }
    */
}
