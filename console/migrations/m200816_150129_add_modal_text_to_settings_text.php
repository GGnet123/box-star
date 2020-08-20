<?php

use yii\db\Migration;

/**
 * Class m200816_150129_add_modal_text_to_settings_text
 */
class m200816_150129_add_modal_text_to_settings_text extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('settings_text', 'free_estimate_text', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('settings_text', 'free_estimate_text');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200816_150129_add_modal_text_to_settings_text cannot be reverted.\n";

        return false;
    }
    */
}
