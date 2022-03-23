<?php

use yii\db\Migration;

/**
 * Class m220323_024233_Matriz
 */
class m220323_024233_Matriz extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
#MATRIZ (ID, SIGLA, CH_TOTAL, CURSO_FK)
        $this -> createTable('MATRIZ', [
            'ID'        => $this->primaryKey(),
            'SIGLA'     => $this->string(),
            'CH_TOTAL'  => $this->integer(),
            'CURSO_ID'  => $this->integer()
    
        ]);
        $this->addForeignKey('curso_fk', 'MATRIZ', 'CURSO_ID', 'CURSO', 'ID', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('curso_fk', 'MATRIZ');
        $this->dropTable('MATRIZ');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220323_024233_Matriz cannot be reverted.\n";

        return false;
    }
    */
}
