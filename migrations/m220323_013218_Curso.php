<?php

use yii\db\Migration;

/**
 * Class m220323_013218_Curso
 */
class m220323_013218_Curso extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#CURSO (ID, NOME, CH_TOTAL, Q_PERIODO, SIGLA)
        $this->createTable('CURSO', [
            'ID' => $this->primaryKey(),
            'NOME' => $this->string()->notNull(),
            'CH_TOTAL' => $this->integer(),
            'Q_PERIODO' => $this->smallInteger(),
            'SIGLA' => $this->string(10)

        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('CURSO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220323_013218_Curso cannot be reverted.\n";

        return false;
    }
    */
}
