<?php
    namespace Drupal\modulo\Plugin\Block;

    use Drupal\Core\Block\BlockBase;

    /**
     * Definition block
     * 
     * @Block(
     *  id= "Bloque formulario" ,
     *  admin_label = @Translation('Bloque formulario')
     * )
     */

    class PruebasBlock extends BlockBase{
        public function build(){
            return [
                '#theme' => 'Crear_formulario',
                '#titulo' => $this->t('Formulario Donaciones'),
                '#descripcion' => 'Formulario de donaciones',
                '#formulario' => $form,
            ];
        }
    }

?>