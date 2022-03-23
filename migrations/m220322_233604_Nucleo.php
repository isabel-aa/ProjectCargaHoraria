<?php

use yii\db\Migration;

/**
 * Class m220322_233604_Nucleo
 */
class m220322_233604_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()   #safeUp é o que tem que ser executado no banco mysql quando rodar essa migration
    {
        #NUCLEO(ID, NOME)
        $this->createTable('NUCLEO', [   
            'ID' =>$this->primaryKey(), #já e colocando como padrão que é auto-incremento 
            'NOME' =>$this->string() #não colocando valor nenhum vai gerar automaticamente varchar de  255 posições 
    
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()  #safeDown é o que tem que acontecer se eu precisar reverter essa migration ex: "fiz uma alteração no banco e deu inconsistência no projeto" então é rever e olhar o que precisa reverter 
    {
        $this->dropTable('NUCLEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220322_233604_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
