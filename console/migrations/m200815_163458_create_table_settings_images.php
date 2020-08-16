<?php

use yii\db\Migration;

/**
 * Class m200815_163458_create_table_settings_images
 */
class m200815_163458_create_table_settings_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings_images', [
            'id' => $this->primaryKey(),
            'about_us_image' => $this->string(),
            'our_service_1' => $this->string(),
            'our_service_2' => $this->string(),
            'our_service_3' => $this->string(),
            'comment_section_image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings_images');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200815_163458_create_table_settings_images cannot be reverted.\n";

        return false;
    }
    */
}
